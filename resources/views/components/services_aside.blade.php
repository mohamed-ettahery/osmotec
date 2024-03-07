<ul class="services-list mb-50">
    <li><a {{ Request::is('services/osmotec-swro') ? 'class=active' : '' }} href="{{ route('osmotec.swro') }}">OSMOTEC
            SWRO</a></li>
    <li><a {{ Request::is('services/osmotec-bwro-hs') ? 'class=active' : '' }}
            href="{{ route('osmotec.bwro.hs') }}">OSMOTEC BWRO HS</a>
    </li>
    <li><a {{ Request::is('services/osmotec-bwro-ms') ? 'class=active' : '' }}
            href="{{ route('osmotec.bwro.ms') }}">OSMOTEC BWRO MS</a></li>
    <li><a {{ Request::is('services/osmotec-bwro-ls') ? 'class=active' : '' }}
            href="{{ route('osmotec.bwro.ls') }}">OSMOTEC BWRO LS</a>
    </li>
</ul>
