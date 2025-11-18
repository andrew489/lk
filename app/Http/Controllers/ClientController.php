<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\ContractApplication;
use App\Models\TransferMoneyApplication;
use App\Models\EodApplication;
use App\Models\User;

class ClientController extends Controller
{
    public function main(): View
    {
        $contracts = [
            [
                'title' => 'Посутка тест',
                'period' => '01.01.2023 - 31.12.2030',
                'type' => 'Договор оперирования',
                'status' => 'Подписан',
                'balance' => '0.00 руб.',
                'oper_balance' => '0.00 руб.',
                'forecast_balance' => '0.00 руб.',
            ],
            [
                'title' => 'ТЭО тест',
                'period' => '01.01.2023 - 31.12.2030',
                'type' => 'Договор оперирования',
                'status' => 'Подписан',
                'balance' => '0.00 руб.',
                'oper_balance' => '0.00 руб.',
                'forecast_balance' => '0.00 руб.',
            ],
        ];

        return view('client.main', compact('contracts'));
    }

    public function contracts(): View
    {
        $userId = auth()->id();
        $today = Carbon::today()->toDateString();

        $exists = ContractApplication::where('user_id', $userId)->exists();
        if (!$exists) {
            $todayDate = Carbon::today();
            $yearEnd = Carbon::create($todayDate->year, 12, 31);
            ContractApplication::create([
                'user_id' => $userId,
                'title' => 'Договор на оперирование',
                'start_date' => $todayDate->copy()->subMonths(1),
                'end_date' => $yearEnd,
            ]);
            ContractApplication::create([
                'user_id' => $userId,
                'title' => 'Договор на услуги',
                'start_date' => $todayDate->copy()->subMonths(2),
                'end_date' => $yearEnd,
            ]);
            ContractApplication::create([
                'user_id' => $userId,
                'title' => 'Истекший договор',
                'start_date' => $todayDate->copy()->subYears(1),
                'end_date' => $todayDate->copy()->subDays(10),
            ]);
        }

        $open = ContractApplication::where('user_id', $userId)
            ->where('end_date', '>=', $today)
            ->orderBy('end_date')
            ->get();

        $closed = ContractApplication::where('user_id', $userId)
            ->where('end_date', '<', $today)
            ->orderByDesc('end_date')
            ->get();

        return view('client.contracts', compact('open', 'closed'));
    }

    public function contractsApplications(Request $request): View
    {
        $userId = auth()->id();
        $today = Carbon::today()->toDateString();

        // Seed demo data to DB once per user if empty
        $exists = ContractApplication::where('user_id', $userId)->exists();
        if (!$exists) {
            $todayDate = Carbon::today();
            $yearEnd = Carbon::create($todayDate->year, 12, 31);
            ContractApplication::create([
                'user_id' => $userId,
                'title' => 'Договор на оперирование',
                'start_date' => $todayDate->copy()->subMonths(1),
                'end_date' => $yearEnd,
            ]);
            ContractApplication::create([
                'user_id' => $userId,
                'title' => 'Договор на услуги',
                'start_date' => $todayDate->copy()->subMonths(2),
                'end_date' => $yearEnd,
            ]);
            ContractApplication::create([
                'user_id' => $userId,
                'title' => 'Истекший договор',
                'start_date' => $todayDate->copy()->subYears(1),
                'end_date' => $todayDate->copy()->subDays(10),
            ]);
        }

        $open = ContractApplication::where('user_id', $userId)
            ->where('end_date', '>=', $today)
            ->orderBy('end_date')
            ->get();

        $closed = ContractApplication::where('user_id', $userId)
            ->where('end_date', '<', $today)
            ->orderByDesc('end_date')
            ->get();

        return view('client.contracts_applications', compact('open', 'closed'));
    }

    public function createContractApplication(Request $request)
    {
        $today = Carbon::today();
        $yearEnd = Carbon::create($today->year, 12, 31);

        ContractApplication::create([
            'user_id' => auth()->id(),
            'title' => 'Новый договор',
            'start_date' => $today,
            'end_date' => $yearEnd,
        ]);

        return redirect('/client/contracts/applications');
    }

    public function contractsCreate(Request $request): View
    {
        $user = auth()->user();
        $prefill = [
            'company_full_name' => $user->name ?? '',
            'company_short_name' => '',
            'inn' => '',
            'kpp' => '',
            'ogrn' => '',
            'okpo' => '',
            'legal_address' => '',
            'rep_fio' => '',
            'rep_position' => '',
            'bik' => '',
            'bank_name' => 'АО «ФГК»',
            'corr_account' => '',
            'settlement_account' => '',
            'postal_address' => '',
            'phone' => '',
            'email' => $user->email ?? '',
            'service_name' => '',
            'service_details' => '',
            'source' => '',
            'submission_method' => '',
        ];
        return view('client.contracts_create', compact('prefill'));
    }

    public function storeContractApplication(Request $request)
    {
        $data = $request->validate([
            'service_name' => ['required','string','max:255'],
            'service_details' => ['nullable','string'],
            'company_full_name' => ['required','string','max:255'],
            'company_short_name' => ['nullable','string','max:255'],
            'inn' => ['nullable','string','max:20'],
            'kpp' => ['nullable','string','max:20'],
            'ogrn' => ['nullable','string','max:20'],
            'okpo' => ['nullable','string','max:20'],
            'legal_address' => ['nullable','string','max:500'],
            'rep_fio' => ['nullable','string','max:255'],
            'rep_position' => ['nullable','string','max:255'],
            'bik' => ['nullable','string','max:20'],
            'bank_name' => ['nullable','string','max:255'],
            'corr_account' => ['nullable','string','max:60'],
            'settlement_account' => ['nullable','string','max:60'],
            'postal_address' => ['nullable','string','max:500'],
            'phone' => ['nullable','string','max:50'],
            'email' => ['required','email'],
            'submission_method' => ['required','string'],
            'source' => ['nullable','string'],
            'authority_doc_type' => ['nullable','string'],
            'reg_doc' => ['nullable','file'],
            'charter' => ['nullable','file'],
            'authority_doc' => ['nullable','file'],
            'beneficiary_doc' => ['nullable','file'],
        ]);

        $files = [];
        foreach (['reg_doc','charter','authority_doc','beneficiary_doc'] as $key) {
            if ($request->file($key)) {
                $files[$key] = $request->file($key)->store('contracts', 'local');
            }
        }

        $today = Carbon::today();
        $yearEnd = Carbon::create($today->year, 12, 31);

        ContractApplication::create([
            'user_id' => auth()->id(),
            'title' => 'Договор: ' . $data['service_name'],
            'start_date' => $today,
            'end_date' => $yearEnd,
            'submission_method' => $data['submission_method'],
            'source' => $data['source'] ?? '',
            'meta' => [
                'service_name' => $data['service_name'],
                'service_details' => $data['service_details'] ?? '',
                'company' => [
                    'full_name' => $data['company_full_name'],
                    'short_name' => $data['company_short_name'] ?? '',
                    'inn' => $data['inn'] ?? '',
                    'kpp' => $data['kpp'] ?? '',
                    'ogrn' => $data['ogrn'] ?? '',
                    'okpo' => $data['okpo'] ?? '',
                    'legal_address' => $data['legal_address'] ?? '',
                    'rep_fio' => $data['rep_fio'] ?? '',
                    'rep_position' => $data['rep_position'] ?? '',
                ],
                'bank' => [
                    'bik' => $data['bik'] ?? '',
                    'bank_name' => $data['bank_name'] ?? '',
                    'corr_account' => $data['corr_account'] ?? '',
                    'settlement_account' => $data['settlement_account'] ?? '',
                ],
                'contacts' => [
                    'postal_address' => $data['postal_address'] ?? '',
                    'phone' => $data['phone'] ?? '',
                    'email' => $data['email'],
                ],
                'authority_doc_type' => $data['authority_doc_type'] ?? '',
                'files' => $files,
            ],
        ]);

        return redirect('/client/contracts/applications');
    }

    public function transferMoney(): View
    {
        $apps = TransferMoneyApplication::where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();
        return view('client.transfer_money', compact('apps'));
    }

    public function eod(): View
    {
        $apps = EodApplication::where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();
        return view('client.eod', compact('apps'));
    }

    public function eodCreate(Request $request): View
    {
        $user = auth()->user();
        $prefill = [
            'org_short_name' => $user->name ?? '',
            'org_inn' => '',
            'org_kpp' => '',
            'edo_participant_id' => '',
            'edo_box_id' => '',
            'rep_fio' => '',
            'rep_position' => '',
            'claim_type' => 'Заявление на заключение соглашения об обмене УПД',
            'contract_number' => '',
            'operator_name' => '',
            'contact_fio' => '',
            'contact_tel' => '',
            'submission_method' => '',
        ];
        $contracts = ContractApplication::where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();
        return view('client.eod_create', compact('prefill','contracts'));
    }

    public function storeEod(Request $request)
    {
        $data = $request->validate([
            'claim_type' => ['required','string','max:255'],
            'contract_number' => ['nullable','string','max:255'],
            'operator_name' => ['required','string','max:255'],
            'contact_fio' => ['required','string','max:255'],
            'contact_tel' => ['required','string','max:64'],
            'submission_method' => ['required','string','max:255'],
            'org_short_name' => ['nullable','string','max:255'],
            'org_inn' => ['nullable','string','max:20'],
            'org_kpp' => ['nullable','string','max:20'],
            'edo_participant_id' => ['nullable','string','max:255'],
            'edo_box_id' => ['nullable','string','max:255'],
            'rep_fio' => ['nullable','string','max:255'],
            'rep_position' => ['nullable','string','max:255'],
        ]);

        EodApplication::create([
            'user_id' => auth()->id(),
            'claim_type' => $data['claim_type'],
            'contract_number' => $data['contract_number'] ?? null,
            'operator_name' => $data['operator_name'],
            'contact_fio' => $data['contact_fio'],
            'contact_tel' => $data['contact_tel'],
            'submission_method' => $data['submission_method'],
            'status' => 'На согласовании',
            'meta' => [
                'org' => [
                    'short_name' => $data['org_short_name'] ?? '',
                    'inn' => $data['org_inn'] ?? '',
                    'kpp' => $data['org_kpp'] ?? '',
                ],
                'edo' => [
                    'participant_id' => $data['edo_participant_id'] ?? '',
                    'box_id' => $data['edo_box_id'] ?? '',
                ],
                'rep' => [
                    'fio' => $data['rep_fio'] ?? '',
                    'position' => $data['rep_position'] ?? '',
                ],
            ],
        ]);

        return redirect('/client/electronic-exchange');
    }

    public function transferMoneyCreate(Request $request): View
    {
        $user = auth()->user();
        $prefill = [
            'org_name' => $user->name ?? '',
            'org_inn' => '',
            'org_okpo' => '',
            'signer' => $user->name ?? '',
        ];
        $contracts = ContractApplication::where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();
        return view('client.transfer_money_create', compact('prefill','contracts'));
    }

    public function storeTransferMoney(Request $request)
    {
        $data = $request->validate([
            'app_type' => ['required','string','max:255'],
            'contract_number' => ['nullable','string','max:255'],
            'vat_type' => ['nullable','string','max:255'],
            'contract_stop' => ['nullable','boolean'],
            'sum_with_vat' => ['nullable','numeric'],
            'vat_sum' => ['nullable','numeric'],
            'signer' => ['nullable','string','max:255'],
            'bank_bik' => ['nullable','string','max:32'],
            'bank_account' => ['nullable','string','max:64'],
            'bank_name' => ['nullable','string','max:255'],
            'bank_corr_account' => ['nullable','string','max:64'],
        ]);

        TransferMoneyApplication::create([
            'user_id' => auth()->id(),
            'app_type' => $data['app_type'],
            'contract_number' => $data['contract_number'] ?? null,
            'vat_type' => $data['vat_type'] ?? null,
            'contract_stop' => (bool)($data['contract_stop'] ?? false),
            'sum_with_vat' => $data['sum_with_vat'] ?? null,
            'vat_sum' => $data['vat_sum'] ?? null,
            'signer' => $data['signer'] ?? null,
            'bank_bik' => $data['bank_bik'] ?? null,
            'bank_account' => $data['bank_account'] ?? null,
            'bank_name' => $data['bank_name'] ?? null,
            'bank_corr_account' => $data['bank_corr_account'] ?? null,
            'status' => 'На согласовании',
        ]);

        return redirect('/client/contracts/transfer-money');
    }

    public function race(): View
    {
        $races = [
            [
                'id' => 100145,
                'station' => 'Московская-Товарная',
                'consignee' => 'ООО «СтройИнвест»',
                'cargo' => 'Щебень',
                'wagons' => 54,
                'mass' => 3820,
                'date' => Carbon::today()->subDays(1),
                'status' => 'Погружено',
            ],
            [
                'id' => 100146,
                'station' => 'Свердловск-Сортировочный',
                'consignee' => 'АО «МеталлПром»',
                'cargo' => 'Металлопродукция',
                'wagons' => 32,
                'mass' => 2480,
                'date' => Carbon::today()->subDays(2),
                'status' => 'В процессе',
            ],
            [
                'id' => 100147,
                'station' => 'Кузбасс-Угольный',
                'consignee' => 'ПАО «ЭнергоСнаб»',
                'cargo' => 'Уголь',
                'wagons' => 65,
                'mass' => 4550,
                'date' => Carbon::today()->subDays(3),
                'status' => 'Ожидает',
            ],
            [
                'id' => 100148,
                'station' => 'Новосибирск-Грузовой',
                'consignee' => 'ООО «ЛесТорг»',
                'cargo' => 'Лесоматериалы',
                'wagons' => 28,
                'mass' => 1960,
                'date' => Carbon::today()->subDays(4),
                'status' => 'Погружено',
            ],
            [
                'id' => 100149,
                'station' => 'Санкт-Петербург-Товарный',
                'consignee' => 'ЗАО «ХимТрейд»',
                'cargo' => 'Химпродукты',
                'wagons' => 18,
                'mass' => 1350,
                'date' => Carbon::today()->subDays(5),
                'status' => 'Отклонено',
            ],
            [
                'id' => 100150,
                'station' => 'Челябинск-Южный',
                'consignee' => 'ООО «АгроМаркет»',
                'cargo' => 'Зерно',
                'wagons' => 40,
                'mass' => 2800,
                'date' => Carbon::today()->subDays(6),
                'status' => 'В процессе',
            ],
        ];
        return view('client.race', compact('races'));
    }

    public function dislocation(): View
    {
        $rows = [
            [
                'wagon_number' => '60512345',
                'station' => 'Московская-Товарная',
                'railway' => 'Московская дор.',
                'operation' => 'Прибытие',
                'date' => Carbon::today()->subDays(1),
                'status' => 'На станции',
                'invoice' => 'ЭР123456',
                'train' => 'Поезд 2101',
            ],
            [
                'wagon_number' => '60623456',
                'station' => 'Санкт-Петербург-Товарный',
                'railway' => 'Октябрьская дор.',
                'operation' => 'Отправление',
                'date' => Carbon::today()->subDays(2),
                'status' => 'В пути',
                'invoice' => 'ЭР123457',
                'train' => 'Поезд 3420',
            ],
            [
                'wagon_number' => '60734567',
                'station' => 'Свердловск-Сортировочный',
                'railway' => 'Свердловская дор.',
                'operation' => 'Маневры',
                'date' => Carbon::today()->subDays(3),
                'status' => 'На станции',
                'invoice' => 'ЭР123458',
                'train' => 'Поезд 1187',
            ],
            [
                'wagon_number' => '60845678',
                'station' => 'Кузбасс-Угольный',
                'railway' => 'Кузбасская дор.',
                'operation' => 'Погрузка',
                'date' => Carbon::today()->subDays(4),
                'status' => 'Под погрузкой',
                'invoice' => 'ЭР123459',
                'train' => '—',
            ],
            [
                'wagon_number' => '60956789',
                'station' => 'Новосибирск-Грузовой',
                'railway' => 'Западно-Сибирская дор.',
                'operation' => 'Прибытие',
                'date' => Carbon::today()->subDays(5),
                'status' => 'На станции',
                'invoice' => 'ЭР123460',
                'train' => 'Поезд 5523',
            ],
            [
                'wagon_number' => '61067890',
                'station' => 'Челябинск-Южный',
                'railway' => 'Южно-Уральская дор.',
                'operation' => 'Разгрузка',
                'date' => Carbon::today()->subDays(6),
                'status' => 'Разгружен',
                'invoice' => 'ЭР123461',
                'train' => '—',
            ],
            [
                'wagon_number' => '61178901',
                'station' => 'Омск-Пассажирский',
                'railway' => 'Западно-Сибирская дор.',
                'operation' => 'Отправление',
                'date' => Carbon::today()->subDays(1),
                'status' => 'В пути',
                'invoice' => 'ЭР123462',
                'train' => 'Поезд 6741',
            ],
            [
                'wagon_number' => '61289012',
                'station' => 'Екатеринбург-Пассажирский',
                'railway' => 'Свердловская дор.',
                'operation' => 'Маневры',
                'date' => Carbon::today()->subDays(2),
                'status' => 'На станции',
                'invoice' => 'ЭР123463',
                'train' => 'Поезд 2210',
            ],
            [
                'wagon_number' => '61390123',
                'station' => 'Красноярск-Грузовой',
                'railway' => 'Красноярская дор.',
                'operation' => 'Прибытие',
                'date' => Carbon::today()->subDays(3),
                'status' => 'На станции',
                'invoice' => 'ЭР123464',
                'train' => 'Поезд 4302',
            ],
            [
                'wagon_number' => '61401234',
                'station' => 'Иркутск-Сортировочный',
                'railway' => 'Восточно-Сибирская дор.',
                'operation' => 'Отправление',
                'date' => Carbon::today()->subDays(4),
                'status' => 'В пути',
                'invoice' => 'ЭР123465',
                'train' => 'Поезд 9801',
            ],
        ];
        return view('client.dislocation', compact('rows'));
    }

    public function actsServices(): View
    {
        $items = [
            [
                'id' => 50123,
                'doc_type' => 'Акт оказанных услуг',
                'doc_number' => 'АС-000123',
                'date' => Carbon::today()->subDays(2),
                'contract' => 'Договор № 45/ОП-2023',
                'service_name' => 'Оперирование',
                'sum' => 152300.50,
                'status' => 'Подписан',
            ],
            [
                'id' => 50124,
                'doc_type' => 'Акт оказанных услуг',
                'doc_number' => 'АС-000124',
                'date' => Carbon::today()->subDays(5),
                'contract' => 'Договор № 12/УС-2023',
                'service_name' => 'Доп. услуги',
                'sum' => 48350.00,
                'status' => 'На согласовании',
            ],
            [
                'id' => 50125,
                'doc_type' => 'Счет за услуги',
                'doc_number' => 'СУ-000315',
                'date' => Carbon::today()->subDays(9),
                'contract' => 'Договор № 78/ОП-2022',
                'service_name' => 'Оперирование',
                'sum' => 225000.00,
                'status' => 'Отправлен',
            ],
            [
                'id' => 50126,
                'doc_type' => 'Акт оказанных услуг',
                'doc_number' => 'АС-000127',
                'date' => Carbon::today()->subDays(12),
                'contract' => 'Договор № 99/УС-2024',
                'service_name' => 'Сопровождение',
                'sum' => 87500.75,
                'status' => 'Подписан',
            ],
            [
                'id' => 50127,
                'doc_type' => 'Счет за услуги',
                'doc_number' => 'СУ-000318',
                'date' => Carbon::today()->subDays(14),
                'contract' => 'Договор № 15/УС-2023',
                'service_name' => 'Доп. услуги',
                'sum' => 19450.00,
                'status' => 'Оплачен',
            ],
            [
                'id' => 50128,
                'doc_type' => 'Акт оказанных услуг',
                'doc_number' => 'АС-000130',
                'date' => Carbon::today()->subDays(18),
                'contract' => 'Договор № 22/ОП-2024',
                'service_name' => 'Оперирование',
                'sum' => 310000.00,
                'status' => 'Отклонен',
            ],
        ];

        return view('client.acts_services', compact('items'));
    }

    public function users(): View
    {
        $users = User::select('id','name','email','created_at')->orderBy('id')->get();
        return view('client.users', compact('users'));
    }
}
