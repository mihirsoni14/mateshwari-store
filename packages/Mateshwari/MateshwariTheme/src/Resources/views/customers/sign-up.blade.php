<!-- SEO Meta Content -->
@push('meta')
    <meta
        name="description"
        content="@lang('shop::app.customers.signup-form.page-title')"
    />
    <meta
        name="keywords"
        content="@lang('shop::app.customers.signup-form.page-title')"
    />
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
        flex: 0 0 40%;
        background: linear-gradient(165deg, #1c1c1e 0%, #2d2926 55%, #1a1612 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 3rem;
        position: sticky;
        top: 0;
        height: 100vh;
        overflow: hidden;
    }

    .atelier-panel::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            repeating-linear-gradient(90deg, transparent 0px, transparent 56px, rgba(201,185,154,0.04) 56px, rgba(201,185,154,0.04) 57px),
            repeating-linear-gradient(0deg,  transparent 0px, transparent 56px, rgba(201,185,154,0.04) 56px, rgba(201,185,154,0.04) 57px);
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
        text-decoration: none;
    }

    .atelier-panel-content {
        position: relative;
        z-index: 1;
    }

    .atelier-quote {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic;
        font-size: 26px;
        font-weight: 300;
        line-height: 1.5;
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
        justify-content: flex-start;
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

    /* Two-column name row */
    .atelier-name-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.25rem;
    }
    @media (max-width: 600px) {
        .atelier-name-row { grid-template-columns: 1fr; gap: 0; }
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

    /* Newsletter / GDPR checkbox rows */
    .atelier-check-row {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        margin-bottom: 1rem;
    }
    .atelier-check-row label {
        font-size: 12.5px !important;
        color: #6b6459 !important;
        text-transform: none !important;
        letter-spacing: 0 !important;
        font-weight: 400 !important;
        cursor: pointer;
        line-height: 1.5;
    }
    .atelier-check-row .atelier-terms-link {
        font-size: 12.5px;
        color: #1a1612;
        font-weight: 500;
        border-bottom: 0.5px solid #1a1612;
        cursor: pointer;
        padding-bottom: 1px;
        text-decoration: none;
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
        margin-top: 1.75rem;
    }
    .atelier-submit:hover { opacity: 0.82; }

    /* Footer links */
    .atelier-footer {
        text-align: center;
        margin-top: 1.75rem;
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
    .atelier-footer a:hover { opacity: 0.65; }

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

<x-shop::layouts
    :has-header="false"
    :has-feature="false"
    :has-footer="false"
>
    <!-- Page Title -->
    <x-slot:title>
        @lang('shop::app.customers.signup-form.page-title')
    </x-slot>

    <div class="atelier-root">

        {{-- ── Left panel ── --}}
        <div class="atelier-panel">
            <img
                src="{{asset('storage/auth/login/auth-atelier.jpg') }}"
                alt=""
                class="atelier-panel-img"
                aria-hidden="true"
            >
            <a href="{{ route('shop.home.index') }}" class="atelier-brand" aria-label="@lang('shop::app.customers.signup-form.bagisto')">
                Atelier
            </a>
            <div class="atelier-panel-content">
                <p class="atelier-quote">"Fashion is the armor to survive the reality of everyday life."</p>
                <div class="atelier-divider"></div>
                <p class="atelier-panel-sub">Join us &middot; New arrivals await</p>
            </div>
        </div>

        {{-- ── Right form panel ── --}}
        <div class="atelier-form-panel">

            {!! view_render_event('bagisto.shop.customers.sign-up.logo.before') !!}

            <p class="atelier-eyebrow">Create account</p>
            <h1 class="atelier-heading">Join Atelier</h1>
            <p class="atelier-subhead">@lang('shop::app.customers.signup-form.form-signup-text')</p>

            <div class="atelier-rule">
                <div class="atelier-rule-line"></div>
                <span class="atelier-rule-mark">A</span>
                <div class="atelier-rule-line"></div>
            </div>

            {!! view_render_event('bagisto.shop.customers.sign-up.logo.before') !!}

            <div class="atelier-form">
                <x-shop::form :action="route('shop.customers.register.store')">

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.before') !!}

                    <!-- First Name + Last Name side by side -->
                    <div class="atelier-name-row">
                        <x-shop::form.control-group>
                            <x-shop::form.control-group.label class="required">
                                @lang('shop::app.customers.signup-form.first-name')
                            </x-shop::form.control-group.label>

                            <x-shop::form.control-group.control
                                type="text"
                                name="first_name"
                                rules="required"
                                :value="old('first_name')"
                                :label="trans('shop::app.customers.signup-form.first-name')"
                                :placeholder="trans('shop::app.customers.signup-form.first-name')"
                                :aria-label="trans('shop::app.customers.signup-form.first-name')"
                                aria-required="true"
                            />

                            <x-shop::form.control-group.error control-name="first_name" />
                        </x-shop::form.control-group>

                        {!! view_render_event('bagisto.shop.customers.signup_form.first_name.after') !!}

                        <x-shop::form.control-group>
                            <x-shop::form.control-group.label class="required">
                                @lang('shop::app.customers.signup-form.last-name')
                            </x-shop::form.control-group.label>

                            <x-shop::form.control-group.control
                                type="text"
                                name="last_name"
                                rules="required"
                                :value="old('last_name')"
                                :label="trans('shop::app.customers.signup-form.last-name')"
                                :placeholder="trans('shop::app.customers.signup-form.last-name')"
                                :aria-label="trans('shop::app.customers.signup-form.last-name')"
                                aria-required="true"
                            />

                            <x-shop::form.control-group.error control-name="last_name" />
                        </x-shop::form.control-group>

                        {!! view_render_event('bagisto.shop.customers.signup_form.last_name.after') !!}
                    </div>

                    <!-- Email -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.email')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="email"
                            name="email"
                            rules="required|email"
                            :value="old('email')"
                            :label="trans('shop::app.customers.signup-form.email')"
                            placeholder="name@example.com"
                            :aria-label="trans('shop::app.customers.signup-form.email')"
                            aria-required="true"
                        />

                        <x-shop::form.control-group.error control-name="email" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.email.after') !!}

                    <!-- Password -->
                    <x-shop::form.control-group class="mb-6">
                        <x-shop::form.control-group.label class="required">
                            @lang('shop::app.customers.signup-form.password')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="password"
                            name="password"
                            rules="required|min:6"
                            :value="old('password')"
                            :label="trans('shop::app.customers.signup-form.password')"
                            :placeholder="trans('shop::app.customers.signup-form.password')"
                            ref="password"
                            :aria-label="trans('shop::app.customers.signup-form.password')"
                            aria-required="true"
                        />

                        <x-shop::form.control-group.error control-name="password" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.password.after') !!}

                    <!-- Confirm Password -->
                    <x-shop::form.control-group>
                        <x-shop::form.control-group.label>
                            @lang('shop::app.customers.signup-form.confirm-pass')
                        </x-shop::form.control-group.label>

                        <x-shop::form.control-group.control
                            type="password"
                            name="password_confirmation"
                            rules="confirmed:@password"
                            value=""
                            :label="trans('shop::app.customers.signup-form.password')"
                            :placeholder="trans('shop::app.customers.signup-form.confirm-pass')"
                            :aria-label="trans('shop::app.customers.signup-form.confirm-pass')"
                            aria-required="true"
                        />

                        <x-shop::form.control-group.error control-name="password_confirmation" />
                    </x-shop::form.control-group>

                    {!! view_render_event('bagisto.shop.customers.signup_form.password_confirmation.after') !!}

                    <!-- Captcha -->
                    @if (core()->getConfigData('customer.captcha.credentials.status'))
                        <x-shop::form.control-group>
                            {!! \Webkul\Customer\Facades\Captcha::render() !!}
                            <x-shop::form.control-group.error control-name="recaptcha_token" />
                        </x-shop::form.control-group>
                    @endif

                    <!-- Newsletter subscription -->
                    @if (core()->getConfigData('customer.settings.create_new_account_options.news_letter'))
                        <div class="atelier-check-row">
                            <input
                                type="checkbox"
                                name="is_subscribed"
                                id="is-subscribed"
                                class="peer hidden"
                            />
                            <label
                                class="icon-uncheck peer-checked:icon-check-box cursor-pointer text-2xl text-navyBlue peer-checked:text-navyBlue"
                                for="is-subscribed"
                                style="flex-shrink:0;"
                            ></label>
                            <label class="cursor-pointer select-none" for="is-subscribed">
                                @lang('shop::app.customers.signup-form.subscribe-to-newsletter')
                            </label>
                        </div>
                    @endif

                    {!! view_render_event('bagisto.shop.customers.signup_form.newsletter_subscription.after') !!}

                    <!-- GDPR agreement -->
                    @if(
                        core()->getConfigData('general.gdpr.settings.enabled')
                        && core()->getConfigData('general.gdpr.agreement.enabled')
                    )
                        <div class="atelier-check-row">
                            <x-shop::form.control-group.control
                                type="checkbox"
                                name="agreement"
                                id="agreement"
                                value="0"
                                rules="required"
                                for="agreement"
                            />
                            <label class="cursor-pointer select-none" for="agreement" v-pre>
                                {{ core()->getConfigData('general.gdpr.agreement.agreement_label') }}
                            </label>
                            @if (core()->getConfigData('general.gdpr.agreement.agreement_content'))
                                <span
                                    class="atelier-terms-link"
                                    @click="$refs.termsModal.open()"
                                >
                                    @lang('shop::app.customers.signup-form.click-here')
                                </span>
                            @endif
                        </div>
                        <x-shop::form.control-group.error control-name="agreement" />
                    @endif

                    <!-- Submit -->
                    <div class="flex flex-wrap gap-4">
                        {!! view_render_event('bagisto.shop.customers.login_form_controls.after') !!}
                    </div>

                    <button type="submit" class="atelier-submit">
                        @lang('shop::app.customers.signup-form.button-title')
                    </button>

                    {!! view_render_event('bagisto.shop.customers.signup_form_controls.after') !!}

                </x-shop::form>
            </div>

            <p class="atelier-footer">
                @lang('shop::app.customers.signup-form.account-exists')
                <a href="{{ route('shop.customer.session.index') }}">
                    @lang('shop::app.customers.signup-form.sign-in-button')
                </a>
            </p>

            <p class="atelier-copyright">
                @lang('shop::app.customers.signup-form.footer', ['current_year' => date('Y')])
            </p>

        </div>
    </div>

    @push('scripts')
        {!! \Webkul\Customer\Facades\Captcha::renderJS() !!}
    @endpush

    <!-- Terms & Conditions Modal -->
    <x-shop::modal ref="termsModal">
        <x-slot:toggle></x-slot>

        <x-slot:header class="!p-5">
            <p>@lang('shop::app.customers.signup-form.terms-conditions')</p>
        </x-slot>

        <x-slot:content class="!p-5">
            <div class="max-h-[500px] overflow-auto">
                {!! core()->getConfigData('general.gdpr.agreement.agreement_content') !!}
            </div>
        </x-slot>
    </x-shop::modal>

</x-shop::layouts>
