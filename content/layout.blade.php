<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        main > div, header > div, footer > div{
            padding: 10px 20px;
            width: 100%;
            max-width: 960px;
            margin: auto;
        }
        main{
            padding: 40px 20px;
            min-height: 82vh;
        }
        header{
            display: flex;
            height: 10vh;
            background-color: {{$_header_background}};
        }
        header > div{
            color: {{$_header_text_color}};
        }
        footer{
            height: 8vh;
            background-color: {{$_footer_background}};
        }
        .news{
            padding: 20px 10px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }
        .news + .news{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1> <a href={{url('/')}}>{{$_title}}</a></h1>
            @if($_show_services)
                <p>{{join(" - ", json_decode($_services))}}</p>    
            @endif
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div>
            <p>{{$_sites_count}} sites, {{$_domains_count}} domínios.</p>
            @php($foundationDate = date("Y", strtotime($_foundation_date)))
            <p>{{$_e_mail}} | {{$_phone_number}} | CNPJ: {{$_cnpj}} | Since {{$foundationDate}}</p>
            <p>Suporte {{$_support_start}} às {{$_support_end}}</p>
        </div>
    </footer>
</body>
</html>