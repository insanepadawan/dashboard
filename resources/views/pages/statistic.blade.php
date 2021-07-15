@extends('layouts.theme')

@section('title', 'Статистика')

@section('body', 'statistics')

@section('content')
    @include('partials.header')
    @include('partials.sidebar')
    <main>
        <section id="statistic">
            <div class="container title">
                <h2>
                    <span>Статистика пользователей</span>
                    <svg width="22" height="12" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.8 0C18.5869 0 17.6 1.00935 17.6 2.25C17.6 2.75365 17.7627 3.2192 18.0371 3.5946L14.4587 7.56535C14.2903 7.52295 14.1144 7.5 13.9333 7.5C13.4829 7.5 13.0639 7.63935 12.7148 7.8778L10.1661 5.92285C10.2314 5.7103 10.2667 5.4843 10.2667 5.25C10.2667 4.00935 9.27975 3 8.06667 3C6.85359 3 5.86667 4.00935 5.86667 5.25C5.86667 5.4843 5.90196 5.7103 5.96723 5.92285L3.41856 7.8778C3.06944 7.63935 2.65041 7.5 2.2 7.5C0.98692 7.5 0 8.50935 0 9.75C0 10.9907 0.98692 12 2.2 12C3.41308 12 4.4 10.9907 4.4 9.75C4.4 9.5157 4.3647 9.2897 4.29944 9.07715L6.84811 7.1222C7.19723 7.36065 7.61625 7.5 8.06667 7.5C8.51708 7.5 8.93611 7.36065 9.28522 7.1222L11.8339 9.07715C11.7686 9.2897 11.7333 9.5157 11.7333 9.75C11.7333 10.9907 12.7203 12 13.9333 12C15.1464 12 16.1333 10.9907 16.1333 9.75C16.1333 9.24635 15.9707 8.7808 15.6963 8.4054L19.2746 4.43465C19.4431 4.47705 19.6189 4.5 19.8 4.5C21.0131 4.5 22 3.49065 22 2.25C22 1.00935 21.0131 0 19.8 0ZM2.2 10.5C1.79564 10.5 1.46667 10.1636 1.46667 9.75C1.46667 9.33645 1.79564 9 2.2 9C2.60436 9 2.93333 9.33645 2.93333 9.75C2.93333 10.1636 2.60436 10.5 2.2 10.5ZM8.06667 6C7.66231 6 7.33333 5.66355 7.33333 5.25C7.33333 4.83645 7.66231 4.5 8.06667 4.5C8.47103 4.5 8.8 4.83645 8.8 5.25C8.8 5.66355 8.47103 6 8.06667 6ZM13.9333 10.5C13.529 10.5 13.2 10.1636 13.2 9.75C13.2 9.33645 13.529 9 13.9333 9C14.3377 9 14.6667 9.33645 14.6667 9.75C14.6667 10.1636 14.3377 10.5 13.9333 10.5ZM19.8 3C19.3956 3 19.0667 2.66355 19.0667 2.25C19.0667 1.83645 19.3956 1.5 19.8 1.5C20.2044 1.5 20.5333 1.83645 20.5333 2.25C20.5333 2.66355 20.2044 3 19.8 3Z" fill="#6B9EFF"/>
                    </svg>
                </h2>
                <a class="hide-tray" href="#">Скрыть</a>
            </div>

            <div class="container tray">
                <div class="filter">
                    <a class="btn active" href="#"><span>За сутки</span></a>
                    <a class="btn" href="#"><span>За неделю</span></a>
                </div>
                <div class="info">
                    <div class="block">
                        <h3>+ 210</h3>
                        <h4>Игр сыграно</h4>
                    </div>
                    <div class="block">
                        <h3>+ 726</h3>
                        <h4>Запросов</h4>
                    </div>
                    <div class="block">
                        <h3>+ 3 761</h3>
                        <h4>Сканирований</h4>
                    </div>
                    <div class="block">
                        <h3>+ 1 190</h3>
                        <h4>Новых пользователей</h4>
                    </div>
                </div>
                <div class="graphic">
                    <header>
                        <h3>29 сентября <span>00:00 - 12:23</span></h3>
                        <nav>
                            <a class="btn active" href="#"><span>Игр сыграно</span></a>
                            <a class="btn" href="#"><span>Запросов</span></a>
                            <a class="btn" href="#"><span>Сканирований</span></a>
                            <a class="btn" href="#"><span>Новых пользователей</span></a>
                        </nav>
                    </header>
                    <div class="chart">
                        @for($i = 0; $i < 24; $i++)
                            <div class="point" data-point="{{ random_int(0, 1500) }}"><span></span></div>
                            <div class="line"></div>
                        @endfor
                        <canvas></canvas>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
