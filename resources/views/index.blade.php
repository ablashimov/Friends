@extends('layouts.main')

@section('content')
    <!-- Slider -->
    <div class="slider">
        <div class="container">
            <ul class="slides">
                <li>
                    <div class="item">
                        <span>{{ $animalsCount }} животных</span><br/>находятся в приюте
                        <img src="/img/slider_1.png" alt="Количество животных в приюте Друг"/>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <span><a href="{{ route('shop.index')}}">Ярмарка добра</a></span><br/>помогите нашим питомцам
                        <img src="/img/slider_0.png" alt="Животные благотворительного фонда Друг"/>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Slider Ends! -->

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-12 volunteer fadeInLeft wow">
                    <h1 class="text-center">Благотворительный фонд "Друг" Краматорск</h1>
                    <p class="text-justify">
                        <strong>Благотворительный фонд "Друг"</strong> - организация единомышленников-волонтеров,
                        которые работают над решением проблемы бездомных животных, жертвуя своему делу огромное
                        количество времени, энергии и любви. <em>"Друг"</em> продвигает идеи гуманного отношения,
                        прикладывая титанические усилия для решения этого сложного вопроса, активно работая с
                        2011 года.
                    </p>
                    <p class="text-justify">
                        Мы спасли, вылечили, стерилизовали и отдали в семьи несколько тысяч кошек и собак. Неоднократно
                        привлекали внимание общественности и власти к проблеме брошеных на произвол
                        судьбы питомцев путем резонансных публикаций в СМИ, на широких круглых столах и депутатских
                        комиссиях. В 2018 мы, наконец, добились принятия «Программы регуляции численности бездомных
                        животных гуманными методами на 2018-2020 гг.» в Краматорске. В 2017 мы запустили «Уроки добра»
                        во
                        всех школах города. Провели много акций общегородского масштаба для популяризации ответственного
                        отношения к нашим маленьким друзьям.
                    </p>
                    <p class="text-justify">
                        <em>Благотворительный фонд "Друг"</em> осуществляет деятельность за счет собственных средств и
                        пожертвований
                        горожан, поэтому приветствуется любая помощь и поддержка.
                        Присоединяйтесь к нам, добро делать легко! Особенно, когда видишь ответное счастье сияющих глаз
                        наших маленьких питомцев!
                    </p>
                </div>
            </div>
            <!-- Volunteer -->
        </div>
        <div class="donate">
            <img src="{{ asset("img/index_logo.jpg") }}" class="volunteer-image wow flip" alt="">
        </div>
        <div class="educate news__main">
            <div class="container">
                <p class="title">Последние новости</p>
                <h2>Наша миссия - дарить любовь и теплоту тем, кто этого так жаждет</h2>
                <div class="row mb-2">
                    @foreach ($news as $article)
                        <div class="col-md-6">
                            <div class="card fadeInRight wow flex-md-row mb-4 box-shadow h-md-250">
                                <a href="{{route('news.show',$article->id)}}">
                                    <img class="card-img-right flex-auto d-none d-lg-block"
                                         alt="Фото новости"
                                         src="{{ asset("storage/$article->file")  }}"
                                         data-holder-rendered="true">
                                </a>
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">{{ date( "d.m.Y", strtotime($article->created_at) ) }}</strong>
                                    <h3>
                                        <a class="text-dark news__title"
                                           href="{{route('news.show',$article->id)}}">{{ $article->title }}</a>
                                    </h3>
                                    <p class="news__text card-text mb-2 truncate">{{ str_limit($article->text, $limit = 100, $end = '...') }}</p>
                                    <a href="{{route('news.show',$article->id)}}">Читать далее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <a class="news__link_all" href="{{ route('news.index')}}">Все новости</a>
                </div>
            </div>
        </div>
        <div class="page top-pattern">
            <div class="container">
                <div class="adopt">
                    <p class="title">Реквизиты для оказания финансовой помощи
                        <span>карта Приватбанка Черкасова Кирина Анатольевна</span></p>
                    <h3>5168 7573 0988 6267</h3>
                </div>
            </div>
        </div>
    </div>

@endsection
