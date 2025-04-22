@props(['href'])

<a href="{{ $href }}">
    <div class="card">
        
        {{ $slot }}<button>show detials</button>
    </div>
</a>
