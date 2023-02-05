<nav>                  
    <ul id="navigation">    
        <li><a href="/">Beranda</a></li>
        <li><a href="">Kategori</a>
            <ul class="submenu">
                
                {{-- INI BELUM BRO --}}
                @foreach($kategoriBerita as $k)
                <li><a href="">{{ $k->nama_kategori }}</a></li>
                <option value="{{ $k->id }}"></option>
                @endforeach
                
            </ul>
        </li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
       
    </ul>
</nav>