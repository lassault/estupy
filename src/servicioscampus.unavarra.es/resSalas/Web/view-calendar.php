


<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
    <title>Reserva de Espacios campus - Calendario de recursos</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
            <meta http-equiv="REFRESH"
			  content="1800;URL=logout.php?redirect=%2FresSalas%2FWeb%2Fview-calendar.php" />
        <link rel="shortcut icon" href="custom-favicon.png"/>
    <link rel="icon" href="custom-favicon.png"/>
    <!-- JavaScript -->
            <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"></script>
        <script
                src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
                crossorigin="anonymous"></script>
        <script type="text/javascript"
                src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <!-- End JavaScript -->

    <!-- CSS -->
            <link rel="stylesheet"
              href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
              type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css"
              type="text/css"/>
                                <link rel='stylesheet' type='text/css' href='scripts/css/select2/select2-4.0.5.min.css?v=2.8.4'/>
        
                    <link rel='stylesheet' type='text/css' href='scripts/css/fullcalendar.min.css?v=2.8.4'/>
        <link rel='stylesheet' type='text/css' href='scripts/css/fullcalendar.print.css' media='print'/>
        
    <script type="text/javascript" src="scripts/js/jquery-ui-timepicker-addon.js?v=2.8.4"></script>
    <link rel='stylesheet' type='text/css' href='scripts/css/jquery-ui-timepicker-addon.css?v=2.8.4'/>
    <link rel='stylesheet' type='text/css' href='css/booked.css?v=2.8.4'/>
                                <link rel='stylesheet' type='text/css' href='scripts/css/jqtree.css?v=2.8.4'/>
        
                <link rel='stylesheet' type='text/css' href='css/null-style.css?v=2.8.4'/>
        
                                <link rel='stylesheet' type='text/css' href='css/calendar.print.css' media='print'/>
        
        <!-- End CSS -->
</head>
<body >

    <nav class="navbar navbar-default navbar-fixed-top"
         role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#booked-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="dashboard.php"><img src="img/custom-logo.png?2.8.4" title="Reserva de Espacios campus - Calendario de recursos" alt="Reserva de Espacios campus - Calendario de recursos"  class="logo"  /></a>
            </div>
            <div class="collapse navbar-collapse" id="booked-navigation">
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                                                            <li class="dropdown" id="navHelpDropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda <b class="caret"></b></a>
                        <ul class="dropdown-menu">
             <!--               <li id="navHelp"><a href="https://www.bookedscheduler.com/help/usage">Ayuda</a></li>  -->
                           <li id="navHelp"><a href="help.php?ht=about">Ayuda</a>
                                         <!--               <li id="navAbout"><a href="help.php?ht=about">Acerca de</a></li>  -->
                        </ul>
                    </li>
                                            <li id="navLogIn"><a href="index.php">Iniciar sesión</a></li>
                                    </ul>
            </div>
        </div>
    </nav>

<div id="main" class="container-fluid" >


<div id="page-calendar">
    
<div class="row form-inline">
    <div id="filter">

                <div>
            <div class="inline"><span id="loadingIndicator" class="fa fa-spin fa-spinner fa-2x indicator no-show"></span></div>
            <label for="calendarFilter">Cambiar calendario</label>
            <select id="calendarFilter">
                                    <option value="s" class="schedule"
                            selected="selected">Todas las reservas</option>
                    
                                    <option value="s16" class="schedule"
                            >PE-Salud</option>
                                            <option value="r631" class="resource"
                                >CSA-01</option>
                                            <option value="r633" class="resource"
                                >CSA-03</option>
                                            <option value="r634" class="resource"
                                >CSA-04</option>
                                            <option value="r636" class="resource"
                                >CSA-06</option>
                                            <option value="r637" class="resource"
                                >CSA-07</option>
                                            <option value="r639" class="resource"
                                >CSA-09</option>
                                            <option value="r640" class="resource"
                                >CSA-10</option>
                                            <option value="r642" class="resource"
                                >CSA-12</option>
                                            <option value="r643" class="resource"
                                >CSA-13</option>
                                            <option value="r645" class="resource"
                                >CSA-15</option>
                                            <option value="r646" class="resource"
                                >CSA-16</option>
                                            <option value="r648" class="resource"
                                >CSA-18</option>
                                            <option value="r649" class="resource"
                                >CSA-19</option>
                                            <option value="r651" class="resource"
                                >CSA-21</option>
                                            <option value="r652" class="resource"
                                >CSA-22</option>
                                            <option value="r654" class="resource"
                                >CSA-24</option>
                                            <option value="r655" class="resource"
                                >CSA-25</option>
                                            <option value="r657" class="resource"
                                >CSA-27</option>
                                            <option value="r659" class="resource"
                                >CSA-29</option>
                                            <option value="r662" class="resource"
                                >CSA-32</option>
                                            <option value="r664" class="resource"
                                >CSA-34</option>
                                            <option value="r666" class="resource"
                                >CSA-36</option>
                                            <option value="r667" class="resource"
                                >CSA-37</option>
                                            <option value="r669" class="resource"
                                >CSA-39</option>
                                            <option value="r671" class="resource"
                                >CSA-41</option>
                                            <option value="r674" class="resource"
                                >CSA-44</option>
                                            <option value="r676" class="resource"
                                >CSA-46</option>
                                            <option value="r678" class="resource"
                                >CSA-48</option>
                                            <option value="r679" class="resource"
                                >CSA-49</option>
                                            <option value="r681" class="resource"
                                >CSA-51</option>
                                            <option value="r683" class="resource"
                                >CSA-53</option>
                                            <option value="r686" class="resource"
                                >CSA-56</option>
                                            <option value="r688" class="resource"
                                >CSA-58</option>
                                            <option value="r690" class="resource"
                                >CSA-60</option>
                                            <option value="r691" class="resource"
                                >CSA-61</option>
                                            <option value="r693" class="resource"
                                >CSA-63</option>
                                            <option value="r695" class="resource"
                                >CSA-65</option>
                                            <option value="r703" class="resource"
                                >CSA-73</option>
                                            <option value="r705" class="resource"
                                >CSA-75</option>
                                            <option value="r706" class="resource"
                                >CSA-76</option>
                                            <option value="r708" class="resource"
                                >CSA-78</option>
                                            <option value="r709" class="resource"
                                >CSA-79</option>
                                            <option value="r710" class="resource"
                                >CSA-80</option>
                    
                                    <option value="s3" class="schedule"
                            >Salas Servicio Informático</option>
                                            <option value="r41" class="resource"
                                >Camara</option>
                                            <option value="r27" class="resource"
                                >Sala Ppal de Reuniones</option>
                                            <option value="r28" class="resource"
                                >Sala VideoConf SI</option>
                    
                                    <option value="s2" class="schedule"
                            >STG Biblioteca Arrosadía</option>
                                            <option value="r5" class="resource"
                                >103 - Hum. - Piso 1 (2 pers.)</option>
                                            <option value="r6" class="resource"
                                >104 - Hum. - Piso 1 (2 pers.)</option>
                                            <option value="r7" class="resource"
                                >105 - Hum. - Piso 1 (2 pers.)</option>
                                            <option value="r8" class="resource"
                                >106 - Hum. - Piso 1 (2 pers.)</option>
                                            <option value="r15" class="resource"
                                >205 - C. Soc. - Piso 2 (2 pers.)</option>
                                            <option value="r16" class="resource"
                                >206 - C. Soc. - Piso 2 (2 pers.)</option>
                                            <option value="r17" class="resource"
                                >207 - C. Soc. - Piso 2 (2 pers.)</option>
                                            <option value="r18" class="resource"
                                >208 - C. Soc. - Piso 2 (2 pers.)</option>
                                            <option value="r19" class="resource"
                                >209 - C. Tec. - Piso 2 (2 pers.)</option>
                                            <option value="r20" class="resource"
                                >210 - C. Tec. - Piso 2 (2 pers.)</option>
                                            <option value="r21" class="resource"
                                >211 - C. Tec. - Piso 2 (2 pers.)</option>
                                            <option value="r22" class="resource"
                                >212 - C. Tec. - Piso 2 (2 pers.)</option>
                                            <option value="r57" class="resource"
                                >Mesa 2 - C.Soc. - Piso 2 (4 pers.)</option>
                                            <option value="r54" class="resource"
                                >Mesa 3 - C.Tec. - Piso 2 (4 pers.)</option>
                    
                                    <option value="s4" class="schedule"
                            >STG Biblioteca Campus C. Salud</option>
                                            <option value="r30" class="resource"
                                >301 - C. de la Salud (2 pers.)</option>
                                            <option value="r32" class="resource"
                                >303 - C. de la Salud (2 pers.)</option>
                                            <option value="r34" class="resource"
                                >305 - C. de la Salud (2 pers.)</option>
                    
                                    <option value="s5" class="schedule"
                            >STG Biblioteca Tudela</option>
                                            <option value="r50" class="resource"
                                >201-A Tudela</option>
                                            <option value="r38" class="resource"
                                >403 - Tudela</option>
                    
                
                            </select>
            <a href="#" id="showResourceGroups">Grupos de recursos</a>
        </div>
    </div>

    <div id="resourceGroupsContainer">
        <div id="resourceGroups"></div>
    </div>


    
</div>

<script type="text/javascript">
    $(function () {
        $('#calendarFilter').select2();
    });

</script>

    <div id="subscriptionContainer">
        <div id="calendarSubscription" class="calendar-subscription">
    </div>


    </div>

    <div id="calendar"></div>

    <div id="dayDialog" class="default-box-shadow">
                <a href="#" id="dayDialogView"><img src="img/search.png" title="" alt=""   />Ver día</a>
        <a href="#" id="dayDialogCancel"><img src="img/slash.png" title="" alt=""   />Cancelar</a>
    </div>

    <div class="modal fade" id="moveErrorDialog" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="errorModalLabel">Error Moviendo las Reservas</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <ul id="moveErrorsList"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success " id="moveErrorOk" ><span class="glyphicon glyphicon-ok-circle"></span> OK</button>
                </div>
            </div>
        </div>
    </div>

    <form id="moveReservationForm">
        <input id="moveReferenceNumber" type="hidden" name='referenceNumber' />
        <input id="moveStartDate" type="hidden" name='beginDate' />
        <input id="moveResourceId" type="hidden" name='resourceId' value="0" />
        <input id="moveSourceResourceId" type="hidden" name='ORIGINAL_RESOURCE_ID' value="0" />
    </form>

    <input type="hidden" id="csrf_token" name="CSRF_TOKEN" value=""/>

    
    
            
    
            
    
            
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/lodash/4.16.3/lodash.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.50/jquery.form.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"></script>
            <script type="text/javascript"
                src="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
        
        <script type="text/javascript" src="scripts/js/select2-4.0.5.min.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/js/fullcalendar.js?v=2.8.4"></script>
        <script type="text/javascript" src="scripts/js/fullcalendarLang/es.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/phpscheduleit.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/reservationPopup.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/calendar.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/ajax-helpers.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/autocomplete.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/js/tree.jquery.js?v=2.8.4"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            var options = {
                view: 'month',
                defaultDate: moment('2020-11-20', 'YYYY-MM-DD'),
                todayText: 'Hoy',
                dayText: 'Día',
                monthText: 'Mes',
                weekText: 'Semana',
                dayClickUrl: 'view-calendar.php?ct=agendaDay&sid=&rid=&gid=',
                dayClickUrlTemplate: 'view-calendar.php?ct=agendaDay&sid=[sid]&rid=[rid]&gid=[gid]',
                dayNames: ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"],
                dayNamesShort: ["Dom","Lun","Mar","Mié","Jue","Vie","Sáb"],
                monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                monthNamesShort: ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],
                timeFormat: 'h:mmt',
                dayMonth: 'd M',
                firstDay: 0,
                reservationUrl: 'guest-reservation.php?sid=&rid=',
                reservationUrlTemplate: 'guest-reservation.php?sid=[sid]&rid=[rid]',
                reservable: true,
                eventsUrl: 'view-calendar.php',
                eventsData: {
                    dr: 'events',
                    sid: '',
                    rid: '',
                    gid: ''
                },
                getSubscriptionUrl: 'view-calendar.php?dr=subscription',
                subscriptionEnableUrl: 'view-calendar.php?action=enable',
                subscriptionDisableUrl: 'view-calendar.php?action=disable',
                moveReservationUrl: "ajax/reservation_move.php",
                returnTo: 'view-calendar.php',
                autocompleteUrl: "ajax/autocomplete.php?type=user",
            };

            var calendar = new Calendar(options);
            calendar.init();

            calendar.bindResourceGroups([{"id":"1","name":"Biblioteca - STG","label":"Biblioteca - STG","parent":null,"parent_id":null,"children":[{"id":"4","name":"Ciencia y Tecnolog\u00eda","label":"Ciencia y Tecnolog\u00eda","parent":null,"parent_id":"1","children":[{"type":"resource","group_id":"4","resource_name":"209 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-19","label":"209 - C. Tec. - Piso 2 (2 pers.)","resource_id":"19","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"210 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-20","label":"210 - C. Tec. - Piso 2 (2 pers.)","resource_id":"20","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"211 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-21","label":"211 - C. Tec. - Piso 2 (2 pers.)","resource_id":"21","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"212 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-22","label":"212 - C. Tec. - Piso 2 (2 pers.)","resource_id":"22","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"Mesa 3 - C.Tec. - Piso 2 (4 pers.)","id":"resource-4-54","label":"Mesa 3 - C.Tec. - Piso 2 (4 pers.)","resource_id":"54","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"3","name":"Ciencias Sociales","label":"Ciencias Sociales","parent":null,"parent_id":"1","children":[{"type":"resource","group_id":"3","resource_name":"205 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-15","label":"205 - C. Soc. - Piso 2 (2 pers.)","resource_id":"15","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"206 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-16","label":"206 - C. Soc. - Piso 2 (2 pers.)","resource_id":"16","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"207 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-17","label":"207 - C. Soc. - Piso 2 (2 pers.)","resource_id":"17","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"208 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-18","label":"208 - C. Soc. - Piso 2 (2 pers.)","resource_id":"18","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"Mesa 2 - C.Soc. - Piso 2 (4 pers.)","id":"resource-3-57","label":"Mesa 2 - C.Soc. - Piso 2 (4 pers.)","resource_id":"57","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"2","name":"Humanidades","label":"Humanidades","parent":null,"parent_id":"1","children":[{"type":"resource","group_id":"2","resource_name":"103 - Hum. - Piso 1 (2 pers.)","id":"resource-2-5","label":"103 - Hum. - Piso 1 (2 pers.)","resource_id":"5","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"2","resource_name":"104 - Hum. - Piso 1 (2 pers.)","id":"resource-2-6","label":"104 - Hum. - Piso 1 (2 pers.)","resource_id":"6","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"2","resource_name":"105 - Hum. - Piso 1 (2 pers.)","id":"resource-2-7","label":"105 - Hum. - Piso 1 (2 pers.)","resource_id":"7","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"2","resource_name":"106 - Hum. - Piso 1 (2 pers.)","id":"resource-2-8","label":"106 - Hum. - Piso 1 (2 pers.)","resource_id":"8","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"}],"type":"group"},{"id":"8","name":"Campus Tudela","label":"Campus Tudela","parent":null,"parent_id":null,"children":[{"type":"resource","group_id":"8","resource_name":"201-A Tudela","id":"resource-8-50","label":"201-A Tudela","resource_id":"50","resourceAdminGroupId":"30096","scheduleId":"5","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"8","resource_name":"403 - Tudela","id":"resource-8-38","label":"403 - Tudela","resource_id":"38","resourceAdminGroupId":"30096","scheduleId":"5","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"9","name":"CC Salud","label":"CC Salud","parent":null,"parent_id":null,"children":[{"type":"resource","group_id":"9","resource_name":"301 - C. de la Salud (2 pers.)","id":"resource-9-30","label":"301 - C. de la Salud (2 pers.)","resource_id":"30","resourceAdminGroupId":"30095","scheduleId":"4","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"9","resource_name":"303 - C. de la Salud (2 pers.)","id":"resource-9-32","label":"303 - C. de la Salud (2 pers.)","resource_id":"32","resourceAdminGroupId":"30095","scheduleId":"4","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"9","resource_name":"305 - C. de la Salud (2 pers.)","id":"resource-9-34","label":"305 - C. de la Salud (2 pers.)","resource_id":"34","resourceAdminGroupId":"30095","scheduleId":"4","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"11","name":"PE Arrosadia","label":"PE Arrosadia","parent":null,"parent_id":null,"children":[{"id":"12","name":"PE ALUM Zona A","label":"PE ALUM Zona A","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"13","name":"PE ALUM Zona B","label":"PE ALUM Zona B","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"14","name":"PE ALUM Zona C","label":"PE ALUM Zona C","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"15","name":"PE ALUM Zona D","label":"PE ALUM Zona D","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"16","name":"PE CS","label":"PE CS","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"17","name":"PE CT","label":"PE CT","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"18","name":"PE HUM","label":"PE HUM","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"19","name":"PE REFE","label":"PE REFE","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"20","name":"PE REVI","label":"PE REVI","parent":null,"parent_id":"11","children":[],"type":"group"}],"type":"group"},{"id":"22","name":"PE Campus Tudela","label":"PE Campus Tudela","parent":null,"parent_id":null,"children":[{"type":"resource","group_id":"22","resource_name":"CSA-80","id":"resource-22-710","label":"CSA-80","resource_id":"710","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"21","name":"PE Salud","label":"PE Salud","parent":null,"parent_id":null,"children":[{"type":"resource","group_id":"21","resource_name":"CSA-01","id":"resource-21-631","label":"CSA-01","resource_id":"631","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-03","id":"resource-21-633","label":"CSA-03","resource_id":"633","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-04","id":"resource-21-634","label":"CSA-04","resource_id":"634","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-06","id":"resource-21-636","label":"CSA-06","resource_id":"636","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-07","id":"resource-21-637","label":"CSA-07","resource_id":"637","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-09","id":"resource-21-639","label":"CSA-09","resource_id":"639","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-10","id":"resource-21-640","label":"CSA-10","resource_id":"640","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-12","id":"resource-21-642","label":"CSA-12","resource_id":"642","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-13","id":"resource-21-643","label":"CSA-13","resource_id":"643","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-15","id":"resource-21-645","label":"CSA-15","resource_id":"645","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-16","id":"resource-21-646","label":"CSA-16","resource_id":"646","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-18","id":"resource-21-648","label":"CSA-18","resource_id":"648","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-19","id":"resource-21-649","label":"CSA-19","resource_id":"649","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-21","id":"resource-21-651","label":"CSA-21","resource_id":"651","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-22","id":"resource-21-652","label":"CSA-22","resource_id":"652","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-24","id":"resource-21-654","label":"CSA-24","resource_id":"654","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-25","id":"resource-21-655","label":"CSA-25","resource_id":"655","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-27","id":"resource-21-657","label":"CSA-27","resource_id":"657","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-29","id":"resource-21-659","label":"CSA-29","resource_id":"659","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-32","id":"resource-21-662","label":"CSA-32","resource_id":"662","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-34","id":"resource-21-664","label":"CSA-34","resource_id":"664","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-36","id":"resource-21-666","label":"CSA-36","resource_id":"666","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"21","resource_name":"CSA-37","id":"resource-21-667","label":"CSA-37","resource_id":"667","resourceAdminGroupId":"30095","scheduleId":"16","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":1,"isAutoReleased":true,"autoReleaseMinutes":15,"minLength":{},"resourceTypeId":"6","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"10","name":"Puestos de Estudio","label":"Puestos de Estudio","parent":null,"parent_id":null,"children":[],"type":"group"},{"id":"5","name":"Salas Servicio Inform\u00e1tico","label":"Salas Servicio Inform\u00e1tico","parent":null,"parent_id":null,"children":[{"type":"resource","group_id":"5","resource_name":"Sala Ppal de Reuniones","id":"resource-5-27","label":"Sala Ppal de Reuniones","resource_id":"27","resourceAdminGroupId":"30089","scheduleId":"3","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"2","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"5","resource_name":"Sala VideoConf SI","id":"resource-5-28","label":"Sala VideoConf SI","resource_id":"28","resourceAdminGroupId":"30089","scheduleId":"3","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":0,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"2","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"}], 0);

        });
    </script>
</div>


	</div><!-- close main-->

	<footer class="footer navbar">
		Reserva de Espacios no Docentes - Serv Informatico
	</footer>

	<script type="text/javascript">
		init();
		$.blockUI.defaults.css.border = 'none';
		$.blockUI.defaults.css.top = '25%';

	</script>

	
	</body>
</html>
