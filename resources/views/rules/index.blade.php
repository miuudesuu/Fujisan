<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <x-slot name="header">
        rules
    </x-slot>
        <body>
            <h1>Blog Name</h1>
                <div class='rules'>
                    @foreach($rules as $rule)
                ---
                    <div class='rule'>
                        <h2 class='title'>title: {{$rule->title}}</h2>
                        @foreach($rule_categories as $rule_category)
                            @if($rule->rule_category_id == $rule_category->id)
                                <p>コメント: {{$rule_category->name}}</p>
                            @endif
                        @endforeach
                        <p class='body'>body: {{$rule->body}}</p>
                    </div>
                    @endforeach
                </div>
                ログインユーザー：{{ Auth::user()->name }}
            </div>
        </body>
    </x-app-layout>
</html>