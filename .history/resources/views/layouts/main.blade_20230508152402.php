<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>
    @include("layouts.partials.styles")
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include("layouts.partials.navbar")
        @include("layouts.partials.sidebar")
        <div class="content-wrapper">
            @include("layouts.partials.header")
            <div class="content">
                @yield("content")
            </div>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        @include("layouts.partials.footer")
    </div>
    @include("layouts.partials.scripts")
    @livewireScripts
</body>
</html>
