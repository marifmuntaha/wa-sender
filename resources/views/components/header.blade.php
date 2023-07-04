<div class="page-header page-header-light">
    <div class="page-header-content d-sm-flex">
        <div class="page-title">
            <h4><span class="font-weight-semibold">{{$page}}</span> - {{config('app.name')}}</h4>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-light header-elements-sm-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                @for($i=0;$i<count($breadcrumb);$i++)
                    <a
                        href="{{$breadcrumb[$i]['link']}}"
                        class="breadcrumb-item @isset($breadcrumb[$i]['active']) active @endisset">
                        @isset($breadcrumb[$i]['icon']) <i class="{{$breadcrumb[$i]['icon']}} mr-2"></i> @endisset
                        {{$breadcrumb[$i]['name']}}
                    </a>
                @endfor
            </div>
            <a href="#" class="header-elements-toggle text-body d-sm-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
