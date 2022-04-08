<h1>list bai viet</h1>

@foreach ($baiviets as $baiviet)
    

<div>
    {{ $baiviet->title }}
    

</div>
<div>

    {{ $baiviet->content }}
</div>

@endforeach

<div>

    {{ $baiviets->links() }}
</div>