<!-- SEO Meta Content -->
@push('meta')
<meta name="description" content="@lang('shop::app.customers.login-form.page-title')" />

<meta name="keywords" content="@lang('shop::app.customers.login-form.page-title')" />
@endPush

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
<style>
    .atelier-root {
        display: flex;
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
        background: #f8f5f0;
    }

    /* ── Left image panel ── */
    .atelier-panel {
        flex: 0 0 44%;
        background: linear-gradient(165deg, #1c1c1e 0%, #2d2926 55%, #1a1612 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 3rem;
        position: relative;
        overflow: hidden;
    }

    .atelier-panel::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            repeating-linear-gradient(90deg, transparent 0px, transparent 56px, rgba(201,185,154,0.04) 56px, rgba(201,185,154,0.04) 57px),
            repeating-linear-gradient(0deg, transparent 0px, transparent 56px, rgba(201,185,154,0.04) 56px, rgba(201,185,154,0.04) 57px);
        pointer-events: none;
    }

    .atelier-panel-img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.35;
    }

    .atelier-brand {
        position: absolute;
        top: 3rem;
        left: 3rem;
        font-family: 'Cormorant Garamond', serif;
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 0.28em;
        text-transform: uppercase;
        color: rgba(201, 185, 154, 0.7);
        z-index: 1;
    }

    .atelier-panel-content {
        position: relative;
        z-index: 1;
    }

    .atelier-quote {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic;
        font-size: 28px;
        font-weight: 300;
        line-height: 1.45;
        color: rgba(248, 245, 240, 0.92);
        margin: 0 0 1.5rem;
    }

    .atelier-divider {
        width: 32px;
        height: 1px;
        background: rgba(201, 185, 154, 0.5);
        margin-bottom: 1rem;
    }

    .atelier-panel-sub {
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: rgba(201, 185, 154, 0.5);
    }

    /* ── Right form panel ── */
    .atelier-form-panel {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 4rem 5rem;
        background: #f8f5f0;
        overflow-y: auto;
    }

    .atelier-eyebrow {
        font-size: 10px;
        font-weight: 500;
        letter-spacing: 0.24em;
        text-transform: uppercase;
        color: #9a9489;
        margin-bottom: 0.6rem;
    }

    .atelier-heading {
        font-family: 'Cormorant Garamond', serif;
        font-size: 42px;
        font-weight: 300;
        line-height: 1.05;
        color: #1a1612;
        margin: 0 0 0.4rem;
    }

    .atelier-subhead {
        font-size: 13px;
        color: #9a9489;
        margin: 0 0 2.5rem;
        font-weight: 300;
    }

    /* Monogram rule */
    .atelier-rule {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 2.25rem;
    }
    .atelier-rule-line {
        flex: 1;
        height: 0.5px;
        background: #d8d2c8;
    }
    .atelier-rule-mark {
        font-family: 'Cormorant Garamond', serif;
        font-size: 14px;
        font-style: italic;
        color: #b0a898;
        letter-spacing: 0.05em;
    }

    /* Override Bagisto control group labels */
    .atelier-form .control-group label,
    .atelier-form [class*="control-group"] label {
        font-size: 10.5px !important;
        font-weight: 500 !important;
        letter-spacing: 0.12em !important;
        text-transform: uppercase !important;
        color: #6b6459 !important;
        margin-bottom: 0.5rem !important;
    }

    /* Override Bagisto inputs */
    .atelier-form input[type="email"],
    .atelier-form input[type="password"],
    .atelier-form input[type="text"] {
        background: #ffffff !important;
        border: 0.5px solid #d8d2c8 !important;
        border-radius: 6px !important;
        padding: 12px 16px !important;
        font-size: 14px !important;
        font-family: 'Inter', sans-serif !important;
        color: #1a1612 !important;
        outline: none !important;
        width: 100% !important;
        box-sizing: border-box !important;
        transition: border-color 0.15s ease !important;
    }
    .atelier-form input:focus {
        border-color: #9a9489 !important;
        box-shadow: none !important;
    }

    /* Show password / forgot row */
    .atelier-aux-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: -0.25rem;
        margin-bottom: 2rem;
    }
    .atelier-aux-row label {
        font-size: 12px !important;
        color: #9a9489 !important;
        text-transform: none !important;
        letter-spacing: 0 !important;
        font-weight: 400 !important;
        cursor: pointer;
    }
    .atelier-forgot {
        font-size: 12px;
        color: #6b6459;
        text-decoration: none;
    }
    .atelier-forgot:hover {
        color: #1a1612;
    }

    /* Submit button */
    .atelier-submit {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        background: #1a1612;
        color: #f8f5f0;
        font-family: 'Inter', sans-serif;
        font-size: 11px;
        font-weight: 500;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        transition: opacity 0.15s ease;
        margin-top: 0.25rem;
    }
    .atelier-submit:hover {
        opacity: 0.82;
    }

    /* Footer links */
    .atelier-footer {
        text-align: center;
        margin-top: 2rem;
        font-size: 12.5px;
        color: #9a9489;
    }
    .atelier-footer a {
        color: #1a1612;
        font-weight: 500;
        text-decoration: none;
        border-bottom: 0.5px solid #1a1612;
        padding-bottom: 1px;
    }
    .atelier-footer a:hover {
        opacity: 0.65;
    }

    .atelier-resend {
        text-align: center;
        margin-top: 1rem;
        font-size: 12.5px;
        color: #9a9489;
    }
    .atelier-resend a {
        color: #1a1612;
        font-weight: 500;
        text-decoration: none;
        border-bottom: 0.5px solid #1a1612;
        padding-bottom: 1px;
    }

    .atelier-copyright {
        text-align: center;
        font-size: 11px;
        color: #b0a898;
        padding: 2rem 0 1rem;
    }

    /* ── Responsive ── */
    @media (max-width: 900px) {
        .atelier-panel { display: none; }
        .atelier-form-panel { padding: 3rem 2.5rem; }
    }
    @media (max-width: 480px) {
        .atelier-form-panel { padding: 2.5rem 1.5rem; }
        .atelier-heading { font-size: 32px; }
    }
</style>
@endpush

<x-shop::layouts :has-header="false" :has-feature="false" :has-footer="false">
    <!-- Page Title -->
    <x-slot:title>
        @lang('shop::app.customers.login-form.page-title')
    </x-slot>

    <div class="atelier-root">

        {{-- ── Left panel ── --}}
        <div class="atelier-panel">
            <img
                src="{{ asset('storage/auth/login/auth-atelier.jpg') }}"
                alt=""
                class="atelier-panel-img"
                aria-hidden="true"
            >
            <span class="atelier-brand">Atelier</span>
            <div class="atelier-panel-content">
                <p class="atelier-quote">"Style is a way to say who you are without having to speak."</p>
                <div class="atelier-divider"></div>
                <p class="atelier-panel-sub">New season &middot; Now available</p>
            </div>
        </div>

        {{-- ── Right form panel ── --}}
        <div class="atelier-form-panel">

            <p class="atelier-eyebrow">Your account</p>
            <h1 class="atelier-heading">Welcome back</h1>
            <p class="atelier-subhead">Sign in to continue to your wardrobe</p>

            <div class="atelier-rule">
                <div class="atelier-rule-line"></div>
                <span class="atelier-rule-mark">A</span>
                <div class="atelier-rule-line"></div>
            </div>

            {!! view_render_event('bagisto.shop.customers.login.before') !!}

            <div class="atelier-form">
                <x-shop::form :action="route('shop.customer.session.create')">

                    {!! view_render_event('bagisto.shop.customers.login_form_controls.before') !!}

                    <!-- Email -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.login-form.email')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="email"
                            name="email"
                            rules="required|email"
                            value=""
                            :label="trans('shop::app.customers.login-form.email')"
                            placeholder="name@example.com"
                            :aria-label="trans('shop::app.customers.login-form.email')"
                            aria-required="true"
                        />

                        <x-shop::form.control-group.error control-name="email" />
                    </x-shop::form.control-group>

                    <!-- Password -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.login-form.password')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="password"
                            id="password"
                            name="password"
                            rules="required|min:6"
                            value=""
                            :label="trans('shop::app.customers.login-form.password')"
                            :placeholder="trans('shop::app.customers.login-form.password')"
                            :aria-label="trans('shop::app.customers.login-form.password')"
                            aria-required="true"
                        />

                        <x-shop::form.control-group.error control-name="password" />
                    </x-shop::form.control-group>

                    <!-- Show password + forgot password -->
                    <div class="atelier-aux-row">
                        <div style="display:flex;align-items:center;gap:6px;">
                            <input
                                type="checkbox"
                                id="show-password"
                                class="peer hidden"
                                onchange="switchVisibility()"
                            />
                            <label
                                class="icon-uncheck peer-checked:icon-check-box cursor-pointer text-2xl text-navyBlue peer-checked:text-navyBlue"
                                for="show-password"
                            ></label>
                            <label class="cursor-pointer" for="show-password">
                                @lang('shop::app.customers.login-form.show-password')
                            </label>
                        </div>

                        <a
                            href="{{ route('shop.customers.forgot_password.create') }}"
                            class="atelier-forgot"
                        >
                            @lang('shop::app.customers.login-form.forgot-pass')
                        </a>
                    </div>

                    <!-- Captcha -->
                    @if (core()->getConfigData('customer.captcha.credentials.status'))
                        <x-shop::form.control-group class="mt-5">
                            {!! \Webkul\Customer\Facades\Captcha::render() !!}
                            <x-shop::form.control-group.error control-name="recaptcha_token" />
                        </x-shop::form.control-group>
                    @endif

                    <!-- Submit -->
                    <button type="submit" class="atelier-submit">
                        @lang('shop::app.customers.login-form.button-title')
                    </button>

                    <div class="py-5">
                        {!! view_render_event('bagisto.shop.customers.login_form_controls.after') !!}
                    </div>

                </x-shop::form>
            </div>

            {!! view_render_event('bagisto.shop.customers.login.after') !!}

            @if (request()->cookie('enable-resend') && request()->cookie('email-for-resend'))
                <p class="atelier-resend">
                    <a href="{{ route('shop.customers.resend.verification_email', urlencode(request()->cookie('email-for-resend'))) }}">
                        @lang('shop::app.customers.login-form.resend-verification')
                    </a>
                </p>
            @endif

            <p class="atelier-footer">
                @lang('shop::app.customers.login-form.new-customer')
                <a href="{{ route('shop.customers.register.index') }}">
                    @lang('shop::app.customers.login-form.create-your-account')
                </a>
            </p>

            <p class="atelier-copyright">
                @lang('shop::app.customers.login-form.footer', ['current_year' => date('Y')])
            </p>

        </div>
    </div>

    @push('scripts')
        {!! \Webkul\Customer\Facades\Captcha::renderJS() !!}
        <script>
            function switchVisibility() {
                let passwordField = document.getElementById("password");
                passwordField.type = passwordField.type === "password" ? "text" : "password";
            }
        </script>
    @endpush

</x-shop::layouts>
