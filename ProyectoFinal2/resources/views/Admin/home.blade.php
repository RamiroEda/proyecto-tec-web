<h2>Calendario de practicas y visitas escolares</h2>

<div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card bg-primary">
                <div class="card-block">
                    <h3 class="card-title">60</h3>
                    <span class="card-title">Practicas programadas</span>
                </div>
                <div class="card-footer text-center text-white">
                    <a href="#">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-success">
                <div class="card-block">
                    <h3 class="card-title">53%</h3>
                    <span class="card-title">Practicas reiz</span>
                </div>
                <div class="card-footer text-center text-white">
                    <a href="#">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-warning">
                <div class="card-block">
                    <h3 class="card-title">6</h3>
                    <span class="card-title">Programadas</span>
                </div>
                <div class="card-footer text-center text-white">
                    <a href="#">Ver mas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-danger">
                <div class="card-block">
                    <h3 class="card-title">10</h3>
                    <span class="card-title">Canceladas</span>
                </div>
                <div class="card-footer text-center text-white">
                    <a href="#">Ver mas</a>
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

<script>
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: '2018-11-16',
        navLinks: true,
        eventLimit: true,
        events: [{
                title: 'Front-End Conference',
                start: '2018-11-16',
                end: '2018-11-18'
            },
            {
                title: 'Hair stylist with Mike',
                start: '2018-11-20',
                allDay: true
            },
            {
                title: 'Car mechanic',
                start: '2018-11-14T09:00:00',
                end: '2018-11-14T11:00:00'
            },
            {
                title: 'Dinner with Mike',
                start: '2018-11-21T19:00:00',
                end: '2018-11-21T22:00:00'
            },
            {
                title: 'Chillout',
                start: '2018-11-15',
                allDay: true
            },
            {
                title: 'Vacation',
                start: '2018-11-23',
                end: '2018-11-29'
            },
        ]
    });
</script>