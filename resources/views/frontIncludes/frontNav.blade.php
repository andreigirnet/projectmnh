<nav class="modern-nav">
    <div class="nav-wrapper">
        <a href="{{route('frontHome')}}" class="brand">
            <img src="{{asset('images/logo/logomain.png')}}" alt="Ireland Safety Course" class="logoradius">
        </a>

        <div class="nav-links">
            <a href="{{route('frontHome')}}" x-text="data.navigation[0]"></a>
            <a href="{{route('front.faq')}}" x-text="data.navigation[1]"></a>
            <a href="{{route('front.team')}}" x-text="data.navigation[2]"></a>
            <a href="{{route('front.consulting')}}" x-text="data.navigation[3]"></a>
{{--            <a href="{{route('front.blog')}}" x-text="data.navigation[5]"></a>--}}
            <a href="{{route('front.contact')}}" x-text="data.navigation[4]"></a>
        </div>

        <div class="nav-utils">
            <div class="language-picker">
                <template x-if="currentLanguage">
                    <img :src="'{{asset('images/flags/')}}/' + currentLanguage + '.png'" class="flag-icon">
                </template>
                <select x-model="currentLanguage" @change="chooseLanguage(currentLanguage)">
                    <option value="en">English</option>
                    <option value="ro">Romanian</option>
                    <option value="ru">Russian</option>
                    <option value="pl">Polish</option>
                    <option value="ukr">Ukrainian</option>
                    <option value="sp">Spanish</option>
                </select>
            </div>

            <a href="{{route('login')}}" class="cta-login" x-text="data.login"></a>
        </div>
    </div>
</nav>
