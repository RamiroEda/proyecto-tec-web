<div class="container">
    <h2>Calendario de practicas y visitas escolares</h2>

    <div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card bg-primary">
                    <div class="card-block">
                    <h3 class="card-title">{{$total}}</h3>
                        <span class="card-title">Practicas programadas</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-success">
                    <div class="card-block">
                    <h3 class="card-title">{{$porcRealizado}}%</h3>
                        <span class="card-title">Practicas realizadas</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-warning">
                    <div class="card-block">
                    <h3 class="card-title">{{$pendientes}}</h3>
                        <span class="card-title">Pendientes</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-danger">
                    <div class="card-block">
                    <h3 class="card-title">{{$terminados}}</h3>
                        <span class="card-title">Terminadas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='card'>
        <div class="card-content">
            <div id='calendar'></div>
        </div>
    </div>
</div>



<script>
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: Date.now(),
        navLinks: true,
        eventLimit: true,
        events: [
            @foreach ($practicas as $p)
                {
                    title: '{{$p->nombre}}',
                    start: '{{$p->fechaEntrega}}',
                    end: '{{$p->fechaEntrega}}'
                },
            @endforeach
        ]
    });
</script>