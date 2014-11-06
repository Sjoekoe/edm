@foreach(array_chunk($series->getCollection()->all(), 3) as $row)
<div class="row lesson-set lessons_row">
    @foreach($row as $serie)
    <article class="col-md-4 lesson-block lesson-block-series">
        <h3 class="lesson-block-title">{{ $serie->name }}</h3>

        <div class="full-center lesson-block-inner" style="background: url('..{{$serie->image}}') 45%">
            <div class="lesson-block-excerpt full-center">
                <div class="full-center-inner">
                    <p>{{ $serie->text }}</p>
                </div>
            </div>
            <div class="lesson-block-details">
                <ul class="full-center-inner">
                    <li>
                        <i class="fa fa-calendar-o"></i>
                        Last Updated:
                        <span>{{ $serie->updated_at->format('d-m-Y') }}</span>
                    </li>
                    <li>
                        <i class="fa fa-caret-square-o-right"></i>
                        Episode count:
                        <span>7</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lesson-block-meta">
            <div class="lesson-date">
                <i class="fa fa-calendar"></i>
                <small>{{ $serie->created_at->format('d-m-Y') }}</small>
            </div>
        </div>
    </article>
    @endforeach
</div>
@endforeach

{{ $series->links() }}
