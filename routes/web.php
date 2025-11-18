<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return Auth::check() ? redirect('/client/contracts') : redirect('/login');
});

// Авторизация (демо): форма и редирект на клиентский раздел
Route::get('/login', function () {
    return Auth::check() ? redirect('/client/main') : view('auth.login2');
})->name('login');
Route::post('/login', function (Request $request) {
    $data = $request->validate([
        'email' => ['required','email'],
        'password' => ['required','string','min:8'],
    ]);
    $credentials = [
        'email' => strtolower(trim($data['email'])),
        'password' => $data['password'],
    ];
    if (Auth::attempt($credentials, true)) {
        $request->session()->regenerate();
        return redirect('/client/main');
    }
    $user = \App\Models\User::where('email', $credentials['email'])->first();
    if ($user) {
        if (Hash::check($credentials['password'], $user->getAuthPassword())) {
            Auth::login($user, true);
            $request->session()->regenerate();
            return redirect('/client/main');
        }
        if ($user->getAuthPassword() === $credentials['password']) {
            $user->password = $credentials['password'];
            $user->save();
            Auth::login($user, true);
            $request->session()->regenerate();
            return redirect('/client/main');
        }
    }
    return back()->withErrors(['email' => 'Неверные учётные данные'])->withInput();
});
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Регистрация
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'email' => ['required','email','unique:users,email'],
        'password' => ['required','min:8'],
        'name' => ['nullable','string','max:255'],
    ]);
    $user = \App\Models\User::create([
        'email' => $data['email'],
        'password' => $data['password'],
        'name' => $data['name'] ?? 'User',
    ]);
    Auth::login($user);
    return redirect('/client/main');
});

// Клиентский раздел
Route::prefix('client')->middleware('auth')->group(function () {
    Route::get('/main', [ClientController::class, 'main']);
    // Переадресация с главной на договоры
    Route::get('/main', function () { return redirect('/client/contracts'); });
    Route::get('/contracts', [ClientController::class, 'contracts']);
    Route::get('/contracts/applications', [ClientController::class, 'contractsApplications']);
    Route::post('/contracts/new', [ClientController::class, 'createContractApplication'])->name('contracts.new');
    Route::get('/contracts/create', [ClientController::class, 'contractsCreate']);
    Route::post('/contracts/create', [ClientController::class, 'storeContractApplication'])->name('contracts.create');
    Route::get('/contracts/transfer-money', [ClientController::class, 'transferMoney']);
    Route::get('/contracts/transfer-money/create', [ClientController::class, 'transferMoneyCreate']);
    Route::post('/contracts/transfer-money/create', [ClientController::class, 'storeTransferMoney'])->name('transferMoney.create');
    Route::get('/electronic-exchange', [ClientController::class, 'eod']);
    Route::get('/electronic-exchange/create', [ClientController::class, 'eodCreate']);
    Route::post('/electronic-exchange/create', [ClientController::class, 'storeEod'])->name('eod.create');
    Route::get('/race', [ClientController::class, 'race']);
    Route::get('/dislocation', [ClientController::class, 'dislocation']);
    Route::get('/acts-services', [ClientController::class, 'actsServices']);
    Route::get('/service/acts', [ClientController::class, 'actsServices']);
    Route::get('/service/acts/', [ClientController::class, 'actsServices']);
    Route::get('/users', [ClientController::class, 'users']);
  });
