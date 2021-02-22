<div class="grid-dropdown-actions dropdown">


    @foreach($default as $action)
    {!! $action->render() !!}
    @endforeach

    @if(!empty($custom))

    @if(!empty($default))
    @endif

    @foreach($custom as $action)
    {!! $action->render() !!}
    @endforeach
    @endif
    </ul>
</div>

<script>
    $('.table-responsive').on('shown.bs.dropdown', function(e) {
        var t = $(this),
            m = $(e.target).find('.dropdown-menu'),
            tb = t.offset().top + t.height(),
            mb = m.offset().top + m.outerHeight(true),
            d = 20;
        if (t[0].scrollWidth > t.innerWidth()) {
            if (mb + d > tb) {
                t.css('padding-bottom', ((mb + d) - tb));
            }
        } else {
            t.css('overflow', 'visible');
        }
    }).on('hidden.bs.dropdown', function() {
        $(this).css({
            'padding-bottom': '',
            'overflow': ''
        });
    });
</script>

@yield('child')
