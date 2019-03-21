<div class="breadcrumbs page-title">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('home', ['locale' => $locale]) }}">{{__('vocabulary.home')}}</a></li>
            @if(isset($steps))
                @foreach($steps as $index => $step)
                    @if($index === count($steps) - 1)
                        <li class="active">{{ $step }}</li>
                    @else
                        <li>{{ $step }}</li>
                    @endif
                @endforeach
            @endif
        </ol>
    </div>
</div>
