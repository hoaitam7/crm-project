<x-guest-layout>

    @push('style')
        <style>
            :root {
                --bg: url("https://hienu.vn/wp-content/uploads/2025/10/mushrooms-8232731_1920-3.jpg");

                --logo: url("images/logo-hienu.png");

                --glass: rgba(0, 0, 0, 0.34);

                --glass-desktop: rgba(0, 0, 0, 0.3);

                --border: rgba(255, 255, 255, 0.08);

                --text: #eef4ee;

                --muted: #cfd7cf;

                --primary: #1f3c28;

                --primary-hover: #182c20;

                --shadow: 0 24px 70px rgba(0, 0, 0, 0.55);

                --radius-m: 22px;

                --radius-d: 16px;
            }

            * {
                box-sizing: border-box;
            }

            html,
            body {
                height: 100%;
            }

            body {
                margin: 0;

                color: var(--text);

                background: #0b140f;

                font-family:
                    system-ui,
                    -apple-system,
                    Segoe UI,
                    Roboto,
                    Arial,
                    "Noto Sans",
                    "Helvetica Neue",
                    sans-serif;
            }

            .bg {
                position: fixed;

                inset: 0;

                background-image: var(--bg);

                background-size: cover;

                background-position: center;

                z-index: 0;
            }

            .bg::after {
                content: "";

                position: absolute;

                inset: 0;

                background: linear-gradient(to bottom,
                        rgba(0, 0, 0, 0.35),
                        rgba(0, 0, 0, 0.35));
            }

            .wrap {
                position: relative;

                min-height: 80vh;

                display: grid;

                place-items: center;

                padding: clamp(16px, 4vw, 32px);

                z-index: 1;
            }

            .stack {
                display: grid;

                gap: 14px;
            }

            .brand {
                display: grid;

                place-items: center;
            }

            .brand__logo {
                width: 135px;

                height: 135px;

                background-image: var(--logo);

                background-repeat: no-repeat;

                background-position: center;

                background-size: contain;

                filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.35));
            }

            .card {
                width: min(92vw, 480px);

                border-radius: var(--radius-m);

                backdrop-filter: blur(8px);

                -webkit-backdrop-filter: blur(8px);

                background: hwb(0deg 100% 0% / 18%);

                border: 1px solid var(--border);

                box-shadow: var(--shadow);

                padding: clamp(22px, 3.2vw, 28px);
            }

            .card__inner {
                width: min(86vw, 420px);

                margin-inline: auto;
            }

            h1 {
                margin: 4px 0 18px;

                font-family: "Merriweather", serif;

                font-weight: 700;

                font-size: clamp(25px, 2.7vw, 32px);

                text-align: center;

                letter-spacing: 0.2px;
            }

            .field {
                margin: 18px 0;
            }

            .label {
                display: block;

                font-weight: 600;

                margin-bottom: 10px;

                color: #e8eee8;
            }

            .input {
                width: 100%;

                background: transparent;

                border: none;

                border-bottom: 1px solid rgba(255, 255, 255, 0.55);

                padding: 10px 2px 8px;

                color: var(--text);

                outline: none;

                transition:
                    border-color 0.2s,
                    box-shadow 0.2s;

                font-size: 15px;
            }

            .input::placeholder {
                color: rgba(255, 255, 255, 0.55);
            }

            .input:focus {
                border-bottom-color: #ffffff;

                box-shadow:
                    inset 0 -1px 0 #fff,
                    0 6px 16px rgba(0, 0, 0, 0.15);
            }

            .check {
                display: flex;

                align-items: center;

                gap: 12px;

                margin: 10px 0 20px;

                user-select: none;
            }

            .check input {
                appearance: none;

                width: 20px;

                height: 20px;

                border-radius: 4px;

                border: 1.5px solid rgba(255, 255, 255, 0.8);

                background: transparent;

                display: inline-grid;

                place-items: center;

                transition: 0.15s;

                cursor: pointer;
            }

            .check input:checked {
                background: var(--primary);

                border-color: var(--primary);
            }

            .check input:checked::after {
                content: "";

                width: 11px;

                height: 11px;

                background: #fff;

                clip-path: polygon(14% 44%, 0 59%, 38% 100%, 100% 24%, 85% 9%, 38% 62%);
            }

            .check label {
                cursor: pointer;

                color: #e8eee8;

                font-size: 14px;
            }

            .actions {
                display: grid;

                justify-items: center;

                gap: 12px;
            }

            .btn {
                width: clamp(240px, 30vw, 300px);

                height: 44px;

                border: 0;

                border-radius: 10px;

                font-weight: 800;

                font-size: 18px;

                letter-spacing: 0.3px;

                color: #eaf2ea;

                background: #162614;

                cursor: pointer;

                box-shadow: 0 6px 18px rgba(13, 40, 24, 0.45);

                transition:
                    transform 0.04s,
                    background 0.15s,
                    box-shadow 0.15s;
            }

            .btn:hover {
                background: #162614;
            }

            .btn:active {
                transform: translateY(1px);
            }

            .forgot {
                font-size: 14px;

                color: #d7ddd7;

                text-decoration: underline;
            }

            .help {
                margin-top: 14px;

                text-align: center;

                color: var(--muted);

                font-size: 14px;

                opacity: 0.95;
            }

            .status {
                margin: 0 0 12px;

                padding: 10px 12px;

                border-radius: 10px;

                border: 1px solid rgba(255, 255, 255, 0.18);

                background: rgba(0, 0, 0, 0.22);

                color: #eaf2ea;

                font-size: 14px;
            }

            .error {
                margin-top: 8px;

                font-size: 13px;

                color: #ffd6d6;

                opacity: 0.95;
            }
        </style>
    @endpush
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg" aria-hidden="true"></div>

    <main class="wrap">
        <div class="stack">
            <!-- Logo -->

            <div class="brand" aria-label="Logo">
                <div class="brand__logo" role="img" aria-label="Hienu CRM"></div>
            </div>

            <!-- Card -->

            <div class="card">
                <div class="card__inner">
                    <h1>Đăng nhập</h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="field">
                            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')"
                                required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="field">

                            <x-text-input id="password" class="input" type="password" name="password" required
                                autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->


                        <div class="check">
                            <input id="remember" type="checkbox" name="remember" />

                            <label for="remember">{{ __('Ghi nhớ mật khẩu') }}</label>
                        </div>


                        <div class="actions">
                            <x-primary-button type="submit" class="btn">
                                {{ __('Đăng nhập') }}
                            </x-primary-button>

                        </div>

                        <p class="help">Hỗ trợ kỹ thuật 0842460196 - Zalo</p>
                    </form>

                </div>
            </div>
        </div>
    </main>
</x-guest-layout>
