@php
    $warna = $sks < 3 ? 'bg-secondary' : 'bg-success';
@endphp

<span class="badge {{ $warna }}">{{ $sks }} SKS</span>