
















    <!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
    <title>Reserva de Espacios campus - Planificación</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex"/>
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
        
                        <link rel='stylesheet' type='text/css' href='scripts/js/owl-2.2.1/assets/owl.carousel.min.css?v=2.8.4'/>
        <link rel='stylesheet' type='text/css' href='scripts/js/owl-2.2.1/assets/owl.theme.default.css?v=2.8.4'/>
    
    <script type="text/javascript" src="scripts/js/jquery-ui-timepicker-addon.js?v=2.8.4"></script>
    <link rel='stylesheet' type='text/css' href='scripts/css/jquery-ui-timepicker-addon.css?v=2.8.4'/>
    <link rel='stylesheet' type='text/css' href='css/booked.css?v=2.8.4'/>
                                <link rel='stylesheet' type='text/css' href='scripts/css/jqtree.css?v=2.8.4'/>
        
                <link rel='stylesheet' type='text/css' href='css/null-style.css?v=2.8.4'/>
        
                                <link rel='stylesheet' type='text/css' href='css/schedule.print.css' media='print'/>
        
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
                   href="dashboard.php"><img src="img/custom-logo.png?2.8.4" title="Reserva de Espacios campus - Planificación" alt="Reserva de Espacios campus - Planificación"  class="logo"  /></a>
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



<div id="page-schedule">
    
    
    
            <div id="defaultSetMessage" class="alert alert-success hidden">
            Ahora ésta es tu planificación predeterminada
        </div>
        
            <div class="row">
                                                                        <div id="schedule-actions" class="col-sm-3 col-xs-12">
                        
                            <a href="#" id="print_schedule" title="Imprimir"><span
                                        class="fa fa-print"></span></a>
                            <a href="#" id="make_default"
                               style="display:none;"><img src="img/star_boxed_full.png" title="Hacer esta planificación mi planificación predeterminada" alt="Hacer esta planificación mi planificación predeterminada"   /></a>
                            <a href="#" class="schedule-style" id="schedule_standard"
                               schedule-display="0"><img src="img/table.png" title="Usar la vista de programación estándar" alt="Usar la vista de programación estándar"   /></a>
                            <a href="#" class="schedule-style" id="schedule_tall"
                               schedule-display="2"><img src="img/table-tall.png" title="Usar la vista de programación alargada" alt="Usar la vista de programación alargada"   /></a>
                            <a href="#" class="schedule-style hidden-sm hidden-xs" id="schedule_wide"
                               schedule-display="1"><img src="img/table-wide.png" title="Usar la vista de programación ancha" alt="Usar la vista de programación ancha"   /></a>
                            <a href="#" class="schedule-style hidden-sm hidden-xs" id="schedule_week"
                               schedule-display="3"><img src="img/table-week.png" title="Usar la vista de programación de semana condensada" alt="Usar la vista de programación de semana condensada"   /></a>
                            <div>
                                                                    <img src="img/feed.png" title="" alt=""   />
                                    <a target="_blank" href="#">Atom</a>
                                    |
                                    <a target="_blank" href="#">iCalendar</a>
                                                            </div>
                        
                    </div>
                
                <div id="schedule-title" class="schedule_title col-sm-6 col-xs-12 col-xs-12">
                    <label for="schedules" class="no-show">Schedule</label>
                    <select id="schedules" class="form-control" style="width:auto;">
                                                    <option value="16"
                                    >PE-Salud</option>
                                                    <option value="3"
                                    >Salas Servicio Informático</option>
                                                    <option value="2"
                                    selected="selected">STG Biblioteca Arrosadía</option>
                                                    <option value="4"
                                    >STG Biblioteca Campus C. Salud</option>
                                                    <option value="5"
                                    >STG Biblioteca Tudela</option>
                        
                    </select>
                    <a href="#" id="calendar_toggle" title="Mostrar/Ocultar navegación">
                        <span class="glyphicon glyphicon-calendar"></span>
                        <span class="no-show">Mostrar/Ocultar navegación</span>
                    </a>
                    <div id="individualDates">
                        <div class="checkbox inline">
                            <input type='checkbox' id='multidateselect'/>
                            <label for='multidateselect'>Mostrar fechas específicas</label>
                        </div>
                        <a class="btn btn-default btn-sm" href="#" id="individualDatesGo"><i
                                    class="fa fa-angle-double-right"></i>
                            <span class="no-show">Mostrar fechas específicas</span>
                        </a>
                    </div>
                    <div id="individualDatesList"></div>
                </div>

                

                
                                            <div class="schedule-dates col-sm-3 col-xs-12">
                                                        <a href="#" class="change-date btn-link btn-success" data-year="2020"
                               data-month="11" data-day="20"
                               alt="Hoy"><i class="fa fa-home"></i>
                                <span class="no-show">Hoy</span>
                            </a>
                                                                                    <a href="#" class="change-date" data-year="2020"
                               data-month="11"
                               data-day="15"><img src="img/arrow_large_left.png" title="Atrás" alt="Atrás"   /></a>
                            20/11/2020 - 24/11/2020
                            <a href="#" class="change-date" data-year="2020"
                               data-month="11"
                               data-day="25"><img src="img/arrow_large_right.png" title="Adelante" alt="Adelante"   /></a>

                                                            <a href="/resSalas/Web/view-schedule.php?&sfw=1"
                                   id="showFullWeek">(Mostrar semana completa)</a>
                                                    </div>
                                    
            </div>
            <div type="text" id="datepicker" style="display:none;"></div>
        

        
        
                    
                <div class="hidden-xs row col-sm-12 schedule-legend">
                    <div class="center">
                        <div class="legend reservable">Reservable</div>
                        <div class="legend unreservable">No reservable</div>
                        <div class="legend reserved">Reservado</div>
                                                <div class="legend reserved pending">Pendiente</div>
                        <div class="legend pasttime">Pasado</div>
                        <div class="legend restricted">Restringido</div>
                    </div>
                </div>
            
            <div class="row">
                <div id="reservations-left" class="col-md-2 col-sm-12 default-box">
                    <div class="reservations-left-header">Filtrar
                        <a href="#" class="pull-right toggle-sidebar" title="Hide Reservation Filter"><i
                                    class="glyphicon glyphicon-remove"></i>
                            <span class="no-show">Hide Reservation Filter</span>
                        </a>
                    </div>

                    <div class="reservations-left-content">
                        <form method="get" role="form" id="advancedFilter">

                            
                            <div>
                                
                                <div id="resourceGroups"></div>
                            </div>

                            <div id="resettable">
                                                                <div class="form-group col-xs-12">
                                    <label for="maxCapactiy">Capacidad mínima</label>
                                    <input type='number' min='0' id='maxCapactiy' size='5' maxlength='5'
                                           class="form-control input-sm" name='maxParticipants'
                                           value=""/>
                                </div>

                                <div class="form-group col-xs-12">
                                    <label for="resourceType">Tipo de recurso</label>
                                    <select id="resourceType" name='RESOURCE_TYPE_ID' name='RESOURCE_TYPE_ID'
                                            class="form-control input-sm">
                                        <option value="">- Todo -</option>
                                        <option label="STG Salas de Trabajo en Grupo" value="1">STG Salas de Trabajo en Grupo</option><option label="Salas Servicio Informático" value="2">Salas Servicio Informático</option><option label="Puesto Estudio No Electrificado Arrosadia" value="4">Puesto Estudio No Electrificado Arrosadia</option><option label="Puesto Estudio Electrificado Arrosadia" value="5">Puesto Estudio Electrificado Arrosadia</option><option label="Puesto Estudio Ciencias de la Salud" value="6">Puesto Estudio Ciencias de la Salud</option><option label="Puesto Estudio Campus Tudela" value="7">Puesto Estudio Campus Tudela</option>
                                    </select>
                                </div>

                                                                    
<div class="form-group customAttribute col-xs-12 ">
    <label class="customAttribute search"
           for="psiattribute8">Electrificado</label>
            <select id="psiattribute8" name="rpsiattribute[8]" class="customAttribute form-control input-sm"
                >
            <option value="">--</option>
                            <option value="Si"
                        >Si</option>
                            <option value="No"
                        >No</option>
            
        </select>
            </div>

                                

                                

                                <div class="btn-submit">
                                    <button type="submit" class="btn btn-success btn-sm"
                                            value="submit">Filtrar</button>
                                </div>
                                <div class="btn-clear">
                                    <button id="show_all_resources" type="button"
                                            class="btn btn-default btn-xs">Limpiar filtro</button>
                                </div>

                            </div>

                            <input type="hidden" name="sid" value="2"/>
                            <input type="hidden" name="sds"
                                   value=""/>
                            <input type="hidden" name="sd" value="2020-11-20"/>
                            <input type="hidden" name='SUBMIT' value="true"/>
                            <input type="hidden" name="clearFilter" id="clearFilter" value="0"/>
                        </form>
                    </div>
                </div>

                <div id="reservations" class="col-md-10 col-sm-12">
                    <div>
                        <a href="#" id="restore-sidebar" title="Show Reservation Filter"
                           class="hidden toggle-sidebar">Filtro de recursos <i
                                    class="glyphicon glyphicon-filter"></i> <i
                                    class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                    
                        

                                    <table class="reservations" data-min="1605826800" data-max="1605913200">
        <thead>
                <tr class="today">
                        <td class="resdate">Viernes, 20/11/20</td>
                            <td class="reslabel"
                    colspan="1">12:00 AM</td>
                            <td class="reslabel"
                    colspan="4">8:00 AM</td>
                            <td class="reslabel"
                    colspan="4">9:00 AM</td>
                            <td class="reslabel"
                    colspan="4">10:00 AM</td>
                            <td class="reslabel"
                    colspan="4">11:00 AM</td>
                            <td class="reslabel"
                    colspan="4">12:00 PM</td>
                            <td class="reslabel"
                    colspan="4">1:00 PM</td>
                            <td class="reslabel"
                    colspan="4">2:00 PM</td>
                            <td class="reslabel"
                    colspan="4">3:00 PM</td>
                            <td class="reslabel"
                    colspan="4">4:00 PM</td>
                            <td class="reslabel"
                    colspan="4">5:00 PM</td>
                            <td class="reslabel"
                    colspan="4">6:00 PM</td>
                            <td class="reslabel"
                    colspan="4">7:00 PM</td>
                            <td class="reslabel"
                    colspan="4">8:00 PM</td>
                            <td class="reslabel"
                    colspan="1">9:00 PM</td>
            
        </tr>
        </thead>
        <tbody>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="5" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=5&sid=2&rd=2020-11-20" resourceId="5"
                           class="resourceNameSelector"
                           >103 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011200000005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200800005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200815005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200830005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200845005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200900005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200915005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200930005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011200945005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201000005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201015005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201030005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201045005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201100005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201115005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201130005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201145005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201200005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201215005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201230005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201245005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201300005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201315005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201330005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201345005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201400005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201415005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201430005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201445005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201500005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201515005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201530005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201545005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201600005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201615005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201630005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201645005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201700005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201715005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201730005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201745005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201800005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201815005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201830005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201845005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201900005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201915005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201930005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011201945005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011202000005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011202015005"
        class="pasttime slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202030005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202045005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011202100005"
        class="unreservable slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="5">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="6" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=6&sid=2&rd=2020-11-20" resourceId="6"
                           class="resourceNameSelector"
                           >104 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011200000006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200800006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200815006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200830006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200845006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200900006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200915006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200930006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011200945006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201000006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201015006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201030006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201045006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201100006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201115006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201130006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201145006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201200006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201215006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201230006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201245006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201300006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201315006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201330006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201345006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201400006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201415006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201430006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201445006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201500006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201515006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201530006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201545006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201600006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201615006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201630006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201645006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201700006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201715006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201730006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201745006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201800006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201815006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201830006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201845006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201900006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201915006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201930006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011201945006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011202000006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011202015006"
        class="pasttime slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202030006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202045006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011202100006"
        class="unreservable slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="6">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="7" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=7&sid=2&rd=2020-11-20" resourceId="7"
                           class="resourceNameSelector"
                           >105 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011200000007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200800007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200815007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200830007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200845007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200900007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200915007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200930007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011200945007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201000007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201015007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201030007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201045007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201100007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201115007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201130007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201145007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201200007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201215007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201230007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201245007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201300007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201315007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201330007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201345007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201400007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201415007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201430007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201445007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201500007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201515007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201530007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201545007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201600007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201615007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201630007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201645007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201700007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201715007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201730007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201745007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201800007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201815007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201830007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201845007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201900007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201915007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201930007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011201945007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011202000007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011202015007"
        class="pasttime slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202030007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202045007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011202100007"
        class="unreservable slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="7">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="8" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=8&sid=2&rd=2020-11-20" resourceId="8"
                           class="resourceNameSelector"
                           >106 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011200000008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200800008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200815008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200830008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200845008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200900008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200915008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200930008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011200945008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201000008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201015008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201030008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201045008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201100008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201115008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201130008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201145008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201200008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201215008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201230008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201245008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201300008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201315008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201330008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201345008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201400008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201415008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201430008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201445008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201500008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201515008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201530008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201545008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201600008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201615008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201630008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201645008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201700008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201715008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201730008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201745008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201800008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201815008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201830008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201845008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201900008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201915008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201930008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011201945008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011202000008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011202015008"
        class="pasttime slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202030008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011202045008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011202100008"
        class="unreservable slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="8">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="15" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=15&sid=2&rd=2020-11-20" resourceId="15"
                           class="resourceNameSelector"
                           >205 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112008000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112008150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112008300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112008450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112009000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112009150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112009300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112009450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112010000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112010150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112010300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112010450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112011000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112011150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112011300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112011450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112012000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112012150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112012300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112012450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112013000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112013150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112013300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112013450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112014000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112014150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112014300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112014450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112015000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112015150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112015300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112015450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112016000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112016150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112016300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112016450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112017000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112017150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112017300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112017450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112018000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112018150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112018300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112018450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112019000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112019150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112019300015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112019450015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112020000015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112020150015"
        class="pasttime slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112021000015"
        class="unreservable slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="15">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="16" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=16&sid=2&rd=2020-11-20" resourceId="16"
                           class="resourceNameSelector"
                           >206 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112008000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112008150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112008300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112008450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112009000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112009150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112009300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112009450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112010000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112010150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112010300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112010450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112011000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112011150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112011300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112011450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112012000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112012150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112012300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112012450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112013000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112013150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112013300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112013450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112014000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112014150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112014300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112014450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112015000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112015150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112015300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112015450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112016000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112016150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112016300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112016450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112017000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112017150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112017300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112017450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112018000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112018150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112018300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112018450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112019000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112019150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112019300016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112019450016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112020000016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112020150016"
        class="pasttime slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112021000016"
        class="unreservable slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="16">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="17" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=17&sid=2&rd=2020-11-20" resourceId="17"
                           class="resourceNameSelector"
                           >207 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112008000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112008150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112008300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112008450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112009000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112009150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112009300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112009450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112010000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112010150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112010300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112010450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112011000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112011150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112011300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112011450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112012000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112012150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112012300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112012450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112013000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112013150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112013300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112013450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112014000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112014150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112014300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112014450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112015000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112015150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112015300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112015450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112016000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112016150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112016300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112016450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112017000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112017150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112017300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112017450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112018000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112018150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112018300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112018450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112019000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112019150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112019300017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112019450017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112020000017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112020150017"
        class="pasttime slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112021000017"
        class="unreservable slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="17">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="18" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=18&sid=2&rd=2020-11-20" resourceId="18"
                           class="resourceNameSelector"
                           >208 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112008000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112008150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112008300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112008450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112009000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112009150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112009300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112009450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112010000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112010150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112010300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112010450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112011000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112011150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112011300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112011450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112012000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112012150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112012300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112012450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112013000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112013150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112013300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112013450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112014000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112014150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112014300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112014450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112015000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112015150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112015300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112015450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112016000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112016150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112016300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112016450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112017000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112017150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112017300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112017450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112018000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112018150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112018300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112018450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112019000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112019150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112019300018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112019450018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112020000018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112020150018"
        class="pasttime slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112021000018"
        class="unreservable slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="18">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="19" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=19&sid=2&rd=2020-11-20" resourceId="19"
                           class="resourceNameSelector"
                           >209 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112008000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112008150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112008300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112008450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112009000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112009150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112009300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112009450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112010000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112010150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112010300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112010450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112011000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112011150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112011300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112011450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112012000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112012150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112012300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112012450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112013000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112013150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112013300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112013450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112014000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112014150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112014300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112014450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112015000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112015150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112015300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112015450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112016000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112016150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112016300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112016450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112017000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112017150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112017300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112017450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112018000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112018150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112018300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112018450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112019000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112019150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112019300019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112019450019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112020000019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112020150019"
        class="pasttime slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112021000019"
        class="unreservable slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="19">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="20" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=20&sid=2&rd=2020-11-20" resourceId="20"
                           class="resourceNameSelector"
                           >210 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112008000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112008150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112008300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112008450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112009000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112009150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112009300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112009450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112010000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112010150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112010300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112010450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112011000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112011150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112011300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112011450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112012000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112012150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112012300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112012450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112013000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112013150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112013300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112013450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112014000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112014150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112014300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112014450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112015000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112015150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112015300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112015450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112016000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112016150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112016300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112016450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112017000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112017150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112017300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112017450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112018000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112018150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112018300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112018450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112019000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112019150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112019300020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112019450020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112020000020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112020150020"
        class="pasttime slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112021000020"
        class="unreservable slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="20">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="21" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=21&sid=2&rd=2020-11-20" resourceId="21"
                           class="resourceNameSelector"
                           >211 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112008000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112008150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112008300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112008450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112009000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112009150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112009300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112009450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112010000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112010150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112010300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112010450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112011000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112011150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112011300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112011450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112012000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112012150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112012300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112012450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112013000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112013150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112013300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112013450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112014000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112014150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112014300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112014450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112015000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112015150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112015300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112015450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112016000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112016150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112016300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112016450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112017000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112017150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112017300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112017450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112018000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112018150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112018300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112018450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112019000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112019150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112019300021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112019450021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112020000021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112020150021"
        class="pasttime slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112021000021"
        class="unreservable slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="21">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="22" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=22&sid=2&rd=2020-11-20" resourceId="22"
                           class="resourceNameSelector"
                           >212 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112008000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112008150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112008300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112008450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112009000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112009150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112009300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112009450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112010000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112010150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112010300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112010450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112011000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112011150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112011300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112011450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112012000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112012150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112012300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112012450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112013000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112013150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112013300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112013450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112014000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112014150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112014300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112014450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112015000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112015150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112015300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112015450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112016000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112016150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112016300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112016450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112017000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112017150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112017300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112017450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112018000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112018150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112018300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112018450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112019000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112019150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112019300022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112019450022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112020000022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112020150022"
        class="pasttime slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112021000022"
        class="unreservable slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="22">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="57" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=57&sid=2&rd=2020-11-20" resourceId="57"
                           class="resourceNameSelector"
                           >Mesa 2 - C.Soc. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112008000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112008150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112008300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112008450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112009000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112009150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112009300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112009450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112010000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112010150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112010300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112010450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112011000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112011150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112011300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112011450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112012000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112012150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112012300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112012450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112013000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112013150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112013300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112013450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112014000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112014150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112014300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112014450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112015000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112015150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112015300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112015450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112016000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112016150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112016300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112016450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112017000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112017150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112017300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112017450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112018000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112018150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112018300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112018450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112019000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112019150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112019300057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112019450057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112020000057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112020150057"
        class="pasttime slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112021000057"
        class="unreservable slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="57">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="54" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=54&sid=2&rd=2020-11-20" resourceId="54"
                           class="resourceNameSelector"
                           >Mesa 3 - C.Tec. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112000000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2000%3A00%3A00"
        data-end="2020-11-20%2008%3A00%3A00"
        data-min="1605826800"
        data-max="1605855600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112008000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A00%3A00"
        data-end="2020-11-20%2008%3A15%3A00"
        data-min="1605855600"
        data-max="1605856500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112008150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A15%3A00"
        data-end="2020-11-20%2008%3A30%3A00"
        data-min="1605856500"
        data-max="1605857400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112008300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A30%3A00"
        data-end="2020-11-20%2008%3A45%3A00"
        data-min="1605857400"
        data-max="1605858300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112008450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2008%3A45%3A00"
        data-end="2020-11-20%2009%3A00%3A00"
        data-min="1605858300"
        data-max="1605859200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112009000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A00%3A00"
        data-end="2020-11-20%2009%3A15%3A00"
        data-min="1605859200"
        data-max="1605860100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112009150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A15%3A00"
        data-end="2020-11-20%2009%3A30%3A00"
        data-min="1605860100"
        data-max="1605861000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112009300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A30%3A00"
        data-end="2020-11-20%2009%3A45%3A00"
        data-min="1605861000"
        data-max="1605861900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112009450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2009%3A45%3A00"
        data-end="2020-11-20%2010%3A00%3A00"
        data-min="1605861900"
        data-max="1605862800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112010000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A00%3A00"
        data-end="2020-11-20%2010%3A15%3A00"
        data-min="1605862800"
        data-max="1605863700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112010150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A15%3A00"
        data-end="2020-11-20%2010%3A30%3A00"
        data-min="1605863700"
        data-max="1605864600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112010300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A30%3A00"
        data-end="2020-11-20%2010%3A45%3A00"
        data-min="1605864600"
        data-max="1605865500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112010450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2010%3A45%3A00"
        data-end="2020-11-20%2011%3A00%3A00"
        data-min="1605865500"
        data-max="1605866400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112011000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A00%3A00"
        data-end="2020-11-20%2011%3A15%3A00"
        data-min="1605866400"
        data-max="1605867300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112011150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A15%3A00"
        data-end="2020-11-20%2011%3A30%3A00"
        data-min="1605867300"
        data-max="1605868200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112011300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A30%3A00"
        data-end="2020-11-20%2011%3A45%3A00"
        data-min="1605868200"
        data-max="1605869100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112011450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2011%3A45%3A00"
        data-end="2020-11-20%2012%3A00%3A00"
        data-min="1605869100"
        data-max="1605870000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112012000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A00%3A00"
        data-end="2020-11-20%2012%3A15%3A00"
        data-min="1605870000"
        data-max="1605870900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112012150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A15%3A00"
        data-end="2020-11-20%2012%3A30%3A00"
        data-min="1605870900"
        data-max="1605871800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112012300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A30%3A00"
        data-end="2020-11-20%2012%3A45%3A00"
        data-min="1605871800"
        data-max="1605872700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112012450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2012%3A45%3A00"
        data-end="2020-11-20%2013%3A00%3A00"
        data-min="1605872700"
        data-max="1605873600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112013000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A00%3A00"
        data-end="2020-11-20%2013%3A15%3A00"
        data-min="1605873600"
        data-max="1605874500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112013150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A15%3A00"
        data-end="2020-11-20%2013%3A30%3A00"
        data-min="1605874500"
        data-max="1605875400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112013300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A30%3A00"
        data-end="2020-11-20%2013%3A45%3A00"
        data-min="1605875400"
        data-max="1605876300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112013450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2013%3A45%3A00"
        data-end="2020-11-20%2014%3A00%3A00"
        data-min="1605876300"
        data-max="1605877200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112014000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A00%3A00"
        data-end="2020-11-20%2014%3A15%3A00"
        data-min="1605877200"
        data-max="1605878100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112014150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A15%3A00"
        data-end="2020-11-20%2014%3A30%3A00"
        data-min="1605878100"
        data-max="1605879000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112014300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A30%3A00"
        data-end="2020-11-20%2014%3A45%3A00"
        data-min="1605879000"
        data-max="1605879900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112014450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2014%3A45%3A00"
        data-end="2020-11-20%2015%3A00%3A00"
        data-min="1605879900"
        data-max="1605880800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112015000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A00%3A00"
        data-end="2020-11-20%2015%3A15%3A00"
        data-min="1605880800"
        data-max="1605881700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112015150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A15%3A00"
        data-end="2020-11-20%2015%3A30%3A00"
        data-min="1605881700"
        data-max="1605882600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112015300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A30%3A00"
        data-end="2020-11-20%2015%3A45%3A00"
        data-min="1605882600"
        data-max="1605883500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112015450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2015%3A45%3A00"
        data-end="2020-11-20%2016%3A00%3A00"
        data-min="1605883500"
        data-max="1605884400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112016000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A00%3A00"
        data-end="2020-11-20%2016%3A15%3A00"
        data-min="1605884400"
        data-max="1605885300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112016150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A15%3A00"
        data-end="2020-11-20%2016%3A30%3A00"
        data-min="1605885300"
        data-max="1605886200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112016300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A30%3A00"
        data-end="2020-11-20%2016%3A45%3A00"
        data-min="1605886200"
        data-max="1605887100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112016450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2016%3A45%3A00"
        data-end="2020-11-20%2017%3A00%3A00"
        data-min="1605887100"
        data-max="1605888000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112017000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A00%3A00"
        data-end="2020-11-20%2017%3A15%3A00"
        data-min="1605888000"
        data-max="1605888900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112017150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A15%3A00"
        data-end="2020-11-20%2017%3A30%3A00"
        data-min="1605888900"
        data-max="1605889800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112017300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A30%3A00"
        data-end="2020-11-20%2017%3A45%3A00"
        data-min="1605889800"
        data-max="1605890700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112017450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2017%3A45%3A00"
        data-end="2020-11-20%2018%3A00%3A00"
        data-min="1605890700"
        data-max="1605891600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112018000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A00%3A00"
        data-end="2020-11-20%2018%3A15%3A00"
        data-min="1605891600"
        data-max="1605892500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112018150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A15%3A00"
        data-end="2020-11-20%2018%3A30%3A00"
        data-min="1605892500"
        data-max="1605893400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112018300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A30%3A00"
        data-end="2020-11-20%2018%3A45%3A00"
        data-min="1605893400"
        data-max="1605894300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112018450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2018%3A45%3A00"
        data-end="2020-11-20%2019%3A00%3A00"
        data-min="1605894300"
        data-max="1605895200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112019000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A00%3A00"
        data-end="2020-11-20%2019%3A15%3A00"
        data-min="1605895200"
        data-max="1605896100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112019150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A15%3A00"
        data-end="2020-11-20%2019%3A30%3A00"
        data-min="1605896100"
        data-max="1605897000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112019300054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A30%3A00"
        data-end="2020-11-20%2019%3A45%3A00"
        data-min="1605897000"
        data-max="1605897900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112019450054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2019%3A45%3A00"
        data-end="2020-11-20%2020%3A00%3A00"
        data-min="1605897900"
        data-max="1605898800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112020000054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A00%3A00"
        data-end="2020-11-20%2020%3A15%3A00"
        data-min="1605898800"
        data-max="1605899700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112020150054"
        class="pasttime slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A15%3A00"
        data-end="2020-11-20%2020%3A30%3A00"
        data-min="1605899700"
        data-max="1605900600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A30%3A00"
        data-end="2020-11-20%2020%3A45%3A00"
        data-min="1605900600"
        data-max="1605901500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112020450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2020%3A45%3A00"
        data-end="2020-11-20%2021%3A00%3A00"
        data-min="1605901500"
        data-max="1605902400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112021000054"
        class="unreservable slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-20"
        data-start="2020-11-20%2021%3A00%3A00"
        data-end="2020-11-21%2000%3A00%3A00"
        data-min="1605902400"
        data-max="1605913200"
        data-resourceId="54">&nbsp;
    </td>


                
            </tr>
        
        </tbody>
    </table>

                                    <table class="reservations" data-min="1605913200" data-max="1605999600">
        <thead>
                <tr>
                        <td class="resdate">Sábado, 21/11/20</td>
                            <td class="reslabel"
                    colspan="1">12:00 AM</td>
            
        </tr>
        </thead>
        <tbody>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="5" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=5&sid=2&rd=2020-11-21" resourceId="5"
                           class="resourceNameSelector"
                           >103 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011210000005"
        class="unreservable slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="5">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="6" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=6&sid=2&rd=2020-11-21" resourceId="6"
                           class="resourceNameSelector"
                           >104 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011210000006"
        class="unreservable slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="6">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="7" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=7&sid=2&rd=2020-11-21" resourceId="7"
                           class="resourceNameSelector"
                           >105 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011210000007"
        class="unreservable slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="7">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="8" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=8&sid=2&rd=2020-11-21" resourceId="8"
                           class="resourceNameSelector"
                           >106 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011210000008"
        class="unreservable slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="8">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="15" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=15&sid=2&rd=2020-11-21" resourceId="15"
                           class="resourceNameSelector"
                           >205 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000015"
        class="unreservable slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="15">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="16" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=16&sid=2&rd=2020-11-21" resourceId="16"
                           class="resourceNameSelector"
                           >206 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000016"
        class="unreservable slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="16">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="17" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=17&sid=2&rd=2020-11-21" resourceId="17"
                           class="resourceNameSelector"
                           >207 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000017"
        class="unreservable slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="17">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="18" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=18&sid=2&rd=2020-11-21" resourceId="18"
                           class="resourceNameSelector"
                           >208 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000018"
        class="unreservable slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="18">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="19" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=19&sid=2&rd=2020-11-21" resourceId="19"
                           class="resourceNameSelector"
                           >209 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000019"
        class="unreservable slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="19">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="20" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=20&sid=2&rd=2020-11-21" resourceId="20"
                           class="resourceNameSelector"
                           >210 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000020"
        class="unreservable slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="20">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="21" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=21&sid=2&rd=2020-11-21" resourceId="21"
                           class="resourceNameSelector"
                           >211 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000021"
        class="unreservable slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="21">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="22" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=22&sid=2&rd=2020-11-21" resourceId="22"
                           class="resourceNameSelector"
                           >212 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000022"
        class="unreservable slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="22">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="57" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=57&sid=2&rd=2020-11-21" resourceId="57"
                           class="resourceNameSelector"
                           >Mesa 2 - C.Soc. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000057"
        class="unreservable slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="57">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="54" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=54&sid=2&rd=2020-11-21" resourceId="54"
                           class="resourceNameSelector"
                           >Mesa 3 - C.Tec. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112100000054"
        class="unreservable slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-21"
        data-start="2020-11-21%2000%3A00%3A00"
        data-end="2020-11-22%2000%3A00%3A00"
        data-min="1605913200"
        data-max="1605999600"
        data-resourceId="54">&nbsp;
    </td>


                
            </tr>
        
        </tbody>
    </table>

                                    <table class="reservations" data-min="1605999600" data-max="1606086000">
        <thead>
                <tr>
                        <td class="resdate">Domingo, 22/11/20</td>
                            <td class="reslabel"
                    colspan="1">12:00 AM</td>
            
        </tr>
        </thead>
        <tbody>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="5" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=5&sid=2&rd=2020-11-22" resourceId="5"
                           class="resourceNameSelector"
                           >103 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011220000005"
        class="unreservable slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="5">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="6" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=6&sid=2&rd=2020-11-22" resourceId="6"
                           class="resourceNameSelector"
                           >104 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011220000006"
        class="unreservable slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="6">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="7" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=7&sid=2&rd=2020-11-22" resourceId="7"
                           class="resourceNameSelector"
                           >105 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011220000007"
        class="unreservable slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="7">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="8" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=8&sid=2&rd=2020-11-22" resourceId="8"
                           class="resourceNameSelector"
                           >106 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011220000008"
        class="unreservable slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="8">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="15" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=15&sid=2&rd=2020-11-22" resourceId="15"
                           class="resourceNameSelector"
                           >205 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000015"
        class="unreservable slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="15">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="16" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=16&sid=2&rd=2020-11-22" resourceId="16"
                           class="resourceNameSelector"
                           >206 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000016"
        class="unreservable slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="16">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="17" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=17&sid=2&rd=2020-11-22" resourceId="17"
                           class="resourceNameSelector"
                           >207 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000017"
        class="unreservable slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="17">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="18" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=18&sid=2&rd=2020-11-22" resourceId="18"
                           class="resourceNameSelector"
                           >208 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000018"
        class="unreservable slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="18">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="19" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=19&sid=2&rd=2020-11-22" resourceId="19"
                           class="resourceNameSelector"
                           >209 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000019"
        class="unreservable slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="19">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="20" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=20&sid=2&rd=2020-11-22" resourceId="20"
                           class="resourceNameSelector"
                           >210 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000020"
        class="unreservable slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="20">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="21" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=21&sid=2&rd=2020-11-22" resourceId="21"
                           class="resourceNameSelector"
                           >211 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000021"
        class="unreservable slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="21">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="22" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=22&sid=2&rd=2020-11-22" resourceId="22"
                           class="resourceNameSelector"
                           >212 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000022"
        class="unreservable slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="22">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="57" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=57&sid=2&rd=2020-11-22" resourceId="57"
                           class="resourceNameSelector"
                           >Mesa 2 - C.Soc. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000057"
        class="unreservable slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="57">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="54" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=54&sid=2&rd=2020-11-22" resourceId="54"
                           class="resourceNameSelector"
                           >Mesa 3 - C.Tec. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112200000054"
        class="unreservable slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-22"
        data-start="2020-11-22%2000%3A00%3A00"
        data-end="2020-11-23%2000%3A00%3A00"
        data-min="1605999600"
        data-max="1606086000"
        data-resourceId="54">&nbsp;
    </td>


                
            </tr>
        
        </tbody>
    </table>

                                    <table class="reservations" data-min="1606086000" data-max="1606172400">
        <thead>
                <tr>
                        <td class="resdate">Lunes, 23/11/20</td>
                            <td class="reslabel"
                    colspan="1">12:00 AM</td>
                            <td class="reslabel"
                    colspan="4">8:00 AM</td>
                            <td class="reslabel"
                    colspan="4">9:00 AM</td>
                            <td class="reslabel"
                    colspan="4">10:00 AM</td>
                            <td class="reslabel"
                    colspan="4">11:00 AM</td>
                            <td class="reslabel"
                    colspan="4">12:00 PM</td>
                            <td class="reslabel"
                    colspan="4">1:00 PM</td>
                            <td class="reslabel"
                    colspan="4">2:00 PM</td>
                            <td class="reslabel"
                    colspan="4">3:00 PM</td>
                            <td class="reslabel"
                    colspan="4">4:00 PM</td>
                            <td class="reslabel"
                    colspan="4">5:00 PM</td>
                            <td class="reslabel"
                    colspan="4">6:00 PM</td>
                            <td class="reslabel"
                    colspan="4">7:00 PM</td>
                            <td class="reslabel"
                    colspan="4">8:00 PM</td>
                            <td class="reslabel"
                    colspan="1">9:00 PM</td>
            
        </tr>
        </thead>
        <tbody>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="5" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=5&sid=2&rd=2020-11-23" resourceId="5"
                           class="resourceNameSelector"
                           >103 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011230000005"
        class="unreservable slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230800005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230815005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230830005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230845005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230900005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230915005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230930005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230945005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231000005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231015005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231030005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231045005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231100005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231115005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231130005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231145005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231200005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231215005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231230005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231245005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231300005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231315005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231330005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231345005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231400005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231415005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231430005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231445005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231500005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231515005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231530005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231545005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231600005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231615005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231630005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231645005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231700005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231715005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231730005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231745005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231800005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231815005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231830005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231845005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231900005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231915005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231930005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231945005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232000005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232015005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232030005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232045005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011232100005"
        class="unreservable slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="5">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="6" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=6&sid=2&rd=2020-11-23" resourceId="6"
                           class="resourceNameSelector"
                           >104 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011230000006"
        class="unreservable slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230800006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230815006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230830006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230845006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230900006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230915006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230930006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230945006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231000006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231015006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231030006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231045006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231100006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231115006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231130006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231145006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231200006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231215006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231230006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231245006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231300006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231315006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231330006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231345006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231400006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231415006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231430006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231445006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231500006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231515006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231530006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231545006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231600006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231615006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231630006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231645006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231700006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231715006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231730006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231745006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231800006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231815006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231830006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231845006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231900006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231915006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231930006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231945006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232000006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232015006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232030006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232045006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011232100006"
        class="unreservable slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="6">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="7" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=7&sid=2&rd=2020-11-23" resourceId="7"
                           class="resourceNameSelector"
                           >105 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011230000007"
        class="unreservable slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230800007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230815007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230830007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230845007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230900007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230915007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230930007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230945007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231000007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231015007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231030007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231045007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231100007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231115007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231130007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231145007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231200007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231215007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231230007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231245007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231300007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231315007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231330007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231345007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231400007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231415007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231430007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231445007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231500007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231515007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231530007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231545007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231600007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231615007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231630007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231645007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231700007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231715007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231730007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231745007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231800007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231815007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231830007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231845007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231900007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231915007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231930007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231945007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232000007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232015007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232030007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232045007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011232100007"
        class="unreservable slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="7">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="8" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=8&sid=2&rd=2020-11-23" resourceId="8"
                           class="resourceNameSelector"
                           >106 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011230000008"
        class="unreservable slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230800008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230815008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230830008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230845008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230900008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230915008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230930008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011230945008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231000008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231015008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231030008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231045008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231100008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231115008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231130008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231145008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231200008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231215008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231230008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231245008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231300008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231315008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231330008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231345008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231400008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231415008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231430008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231445008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231500008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231515008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231530008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231545008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231600008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231615008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231630008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231645008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231700008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231715008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231730008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231745008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231800008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231815008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231830008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231845008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231900008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231915008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231930008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011231945008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232000008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232015008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232030008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011232045008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011232100008"
        class="unreservable slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="8">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="15" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=15&sid=2&rd=2020-11-23" resourceId="15"
                           class="resourceNameSelector"
                           >205 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000015"
        class="unreservable slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112321000015"
        class="unreservable slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="15">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="16" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=16&sid=2&rd=2020-11-23" resourceId="16"
                           class="resourceNameSelector"
                           >206 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000016"
        class="unreservable slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112321000016"
        class="unreservable slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="16">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="17" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=17&sid=2&rd=2020-11-23" resourceId="17"
                           class="resourceNameSelector"
                           >207 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000017"
        class="unreservable slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112321000017"
        class="unreservable slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="17">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="18" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=18&sid=2&rd=2020-11-23" resourceId="18"
                           class="resourceNameSelector"
                           >208 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000018"
        class="unreservable slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112321000018"
        class="unreservable slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="18">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="19" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=19&sid=2&rd=2020-11-23" resourceId="19"
                           class="resourceNameSelector"
                           >209 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000019"
        class="unreservable slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112321000019"
        class="unreservable slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="19">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="20" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=20&sid=2&rd=2020-11-23" resourceId="20"
                           class="resourceNameSelector"
                           >210 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000020"
        class="unreservable slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112321000020"
        class="unreservable slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="20">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="21" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=21&sid=2&rd=2020-11-23" resourceId="21"
                           class="resourceNameSelector"
                           >211 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000021"
        class="unreservable slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112321000021"
        class="unreservable slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="21">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="22" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=22&sid=2&rd=2020-11-23" resourceId="22"
                           class="resourceNameSelector"
                           >212 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000022"
        class="unreservable slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112321000022"
        class="unreservable slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="22">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="57" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=57&sid=2&rd=2020-11-23" resourceId="57"
                           class="resourceNameSelector"
                           >Mesa 2 - C.Soc. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000057"
        class="unreservable slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112321000057"
        class="unreservable slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="57">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="54" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=54&sid=2&rd=2020-11-23" resourceId="54"
                           class="resourceNameSelector"
                           >Mesa 3 - C.Tec. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112300000054"
        class="unreservable slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2000%3A00%3A00"
        data-end="2020-11-23%2008%3A00%3A00"
        data-min="1606086000"
        data-max="1606114800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A00%3A00"
        data-end="2020-11-23%2008%3A15%3A00"
        data-min="1606114800"
        data-max="1606115700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A15%3A00"
        data-end="2020-11-23%2008%3A30%3A00"
        data-min="1606115700"
        data-max="1606116600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A30%3A00"
        data-end="2020-11-23%2008%3A45%3A00"
        data-min="1606116600"
        data-max="1606117500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112308450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2008%3A45%3A00"
        data-end="2020-11-23%2009%3A00%3A00"
        data-min="1606117500"
        data-max="1606118400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A00%3A00"
        data-end="2020-11-23%2009%3A15%3A00"
        data-min="1606118400"
        data-max="1606119300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A15%3A00"
        data-end="2020-11-23%2009%3A30%3A00"
        data-min="1606119300"
        data-max="1606120200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A30%3A00"
        data-end="2020-11-23%2009%3A45%3A00"
        data-min="1606120200"
        data-max="1606121100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112309450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2009%3A45%3A00"
        data-end="2020-11-23%2010%3A00%3A00"
        data-min="1606121100"
        data-max="1606122000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A00%3A00"
        data-end="2020-11-23%2010%3A15%3A00"
        data-min="1606122000"
        data-max="1606122900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A15%3A00"
        data-end="2020-11-23%2010%3A30%3A00"
        data-min="1606122900"
        data-max="1606123800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A30%3A00"
        data-end="2020-11-23%2010%3A45%3A00"
        data-min="1606123800"
        data-max="1606124700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112310450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2010%3A45%3A00"
        data-end="2020-11-23%2011%3A00%3A00"
        data-min="1606124700"
        data-max="1606125600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A00%3A00"
        data-end="2020-11-23%2011%3A15%3A00"
        data-min="1606125600"
        data-max="1606126500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A15%3A00"
        data-end="2020-11-23%2011%3A30%3A00"
        data-min="1606126500"
        data-max="1606127400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A30%3A00"
        data-end="2020-11-23%2011%3A45%3A00"
        data-min="1606127400"
        data-max="1606128300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112311450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2011%3A45%3A00"
        data-end="2020-11-23%2012%3A00%3A00"
        data-min="1606128300"
        data-max="1606129200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A00%3A00"
        data-end="2020-11-23%2012%3A15%3A00"
        data-min="1606129200"
        data-max="1606130100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A15%3A00"
        data-end="2020-11-23%2012%3A30%3A00"
        data-min="1606130100"
        data-max="1606131000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A30%3A00"
        data-end="2020-11-23%2012%3A45%3A00"
        data-min="1606131000"
        data-max="1606131900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112312450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2012%3A45%3A00"
        data-end="2020-11-23%2013%3A00%3A00"
        data-min="1606131900"
        data-max="1606132800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A00%3A00"
        data-end="2020-11-23%2013%3A15%3A00"
        data-min="1606132800"
        data-max="1606133700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A15%3A00"
        data-end="2020-11-23%2013%3A30%3A00"
        data-min="1606133700"
        data-max="1606134600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A30%3A00"
        data-end="2020-11-23%2013%3A45%3A00"
        data-min="1606134600"
        data-max="1606135500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112313450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2013%3A45%3A00"
        data-end="2020-11-23%2014%3A00%3A00"
        data-min="1606135500"
        data-max="1606136400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A00%3A00"
        data-end="2020-11-23%2014%3A15%3A00"
        data-min="1606136400"
        data-max="1606137300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A15%3A00"
        data-end="2020-11-23%2014%3A30%3A00"
        data-min="1606137300"
        data-max="1606138200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A30%3A00"
        data-end="2020-11-23%2014%3A45%3A00"
        data-min="1606138200"
        data-max="1606139100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112314450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2014%3A45%3A00"
        data-end="2020-11-23%2015%3A00%3A00"
        data-min="1606139100"
        data-max="1606140000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A00%3A00"
        data-end="2020-11-23%2015%3A15%3A00"
        data-min="1606140000"
        data-max="1606140900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A15%3A00"
        data-end="2020-11-23%2015%3A30%3A00"
        data-min="1606140900"
        data-max="1606141800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A30%3A00"
        data-end="2020-11-23%2015%3A45%3A00"
        data-min="1606141800"
        data-max="1606142700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112315450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2015%3A45%3A00"
        data-end="2020-11-23%2016%3A00%3A00"
        data-min="1606142700"
        data-max="1606143600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A00%3A00"
        data-end="2020-11-23%2016%3A15%3A00"
        data-min="1606143600"
        data-max="1606144500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A15%3A00"
        data-end="2020-11-23%2016%3A30%3A00"
        data-min="1606144500"
        data-max="1606145400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A30%3A00"
        data-end="2020-11-23%2016%3A45%3A00"
        data-min="1606145400"
        data-max="1606146300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112316450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2016%3A45%3A00"
        data-end="2020-11-23%2017%3A00%3A00"
        data-min="1606146300"
        data-max="1606147200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A00%3A00"
        data-end="2020-11-23%2017%3A15%3A00"
        data-min="1606147200"
        data-max="1606148100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A15%3A00"
        data-end="2020-11-23%2017%3A30%3A00"
        data-min="1606148100"
        data-max="1606149000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A30%3A00"
        data-end="2020-11-23%2017%3A45%3A00"
        data-min="1606149000"
        data-max="1606149900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112317450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2017%3A45%3A00"
        data-end="2020-11-23%2018%3A00%3A00"
        data-min="1606149900"
        data-max="1606150800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A00%3A00"
        data-end="2020-11-23%2018%3A15%3A00"
        data-min="1606150800"
        data-max="1606151700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A15%3A00"
        data-end="2020-11-23%2018%3A30%3A00"
        data-min="1606151700"
        data-max="1606152600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A30%3A00"
        data-end="2020-11-23%2018%3A45%3A00"
        data-min="1606152600"
        data-max="1606153500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112318450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2018%3A45%3A00"
        data-end="2020-11-23%2019%3A00%3A00"
        data-min="1606153500"
        data-max="1606154400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A00%3A00"
        data-end="2020-11-23%2019%3A15%3A00"
        data-min="1606154400"
        data-max="1606155300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A15%3A00"
        data-end="2020-11-23%2019%3A30%3A00"
        data-min="1606155300"
        data-max="1606156200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A30%3A00"
        data-end="2020-11-23%2019%3A45%3A00"
        data-min="1606156200"
        data-max="1606157100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112319450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2019%3A45%3A00"
        data-end="2020-11-23%2020%3A00%3A00"
        data-min="1606157100"
        data-max="1606158000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A00%3A00"
        data-end="2020-11-23%2020%3A15%3A00"
        data-min="1606158000"
        data-max="1606158900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A15%3A00"
        data-end="2020-11-23%2020%3A30%3A00"
        data-min="1606158900"
        data-max="1606159800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A30%3A00"
        data-end="2020-11-23%2020%3A45%3A00"
        data-min="1606159800"
        data-max="1606160700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112320450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2020%3A45%3A00"
        data-end="2020-11-23%2021%3A00%3A00"
        data-min="1606160700"
        data-max="1606161600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112321000054"
        class="unreservable slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-23"
        data-start="2020-11-23%2021%3A00%3A00"
        data-end="2020-11-24%2000%3A00%3A00"
        data-min="1606161600"
        data-max="1606172400"
        data-resourceId="54">&nbsp;
    </td>


                
            </tr>
        
        </tbody>
    </table>

                                    <table class="reservations" data-min="1606172400" data-max="1606258800">
        <thead>
                <tr>
                        <td class="resdate">Martes, 24/11/20</td>
                            <td class="reslabel"
                    colspan="1">12:00 AM</td>
                            <td class="reslabel"
                    colspan="4">8:00 AM</td>
                            <td class="reslabel"
                    colspan="4">9:00 AM</td>
                            <td class="reslabel"
                    colspan="4">10:00 AM</td>
                            <td class="reslabel"
                    colspan="4">11:00 AM</td>
                            <td class="reslabel"
                    colspan="4">12:00 PM</td>
                            <td class="reslabel"
                    colspan="4">1:00 PM</td>
                            <td class="reslabel"
                    colspan="4">2:00 PM</td>
                            <td class="reslabel"
                    colspan="4">3:00 PM</td>
                            <td class="reslabel"
                    colspan="4">4:00 PM</td>
                            <td class="reslabel"
                    colspan="4">5:00 PM</td>
                            <td class="reslabel"
                    colspan="4">6:00 PM</td>
                            <td class="reslabel"
                    colspan="4">7:00 PM</td>
                            <td class="reslabel"
                    colspan="4">8:00 PM</td>
                            <td class="reslabel"
                    colspan="1">9:00 PM</td>
            
        </tr>
        </thead>
        <tbody>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="5" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=5&sid=2&rd=2020-11-24" resourceId="5"
                           class="resourceNameSelector"
                           >103 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011240000005"
        class="unreservable slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240800005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240815005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240830005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240845005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240900005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240915005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240930005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240945005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241000005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241015005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241030005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241045005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241100005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241115005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241130005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241145005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241200005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241215005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241230005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241245005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241300005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241315005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241330005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241345005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241400005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241415005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241430005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241445005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241500005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241515005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241530005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241545005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241600005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241615005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241630005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241645005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241700005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241715005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241730005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241745005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241800005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241815005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241830005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241845005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241900005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241915005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241930005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241945005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242000005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242015005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242030005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242045005"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="5">&nbsp;
    </td>


                                                                <td ref="202011242100005"
        class="unreservable slot"
        data-href="reservation.php?rid=5&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="5">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="6" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=6&sid=2&rd=2020-11-24" resourceId="6"
                           class="resourceNameSelector"
                           >104 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011240000006"
        class="unreservable slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240800006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240815006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240830006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240845006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240900006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240915006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240930006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240945006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241000006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241015006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241030006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241045006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241100006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241115006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241130006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241145006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241200006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241215006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241230006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241245006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241300006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241315006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241330006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241345006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241400006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241415006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241430006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241445006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241500006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241515006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241530006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241545006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241600006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241615006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241630006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241645006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241700006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241715006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241730006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241745006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241800006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241815006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241830006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241845006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241900006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241915006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241930006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241945006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242000006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242015006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242030006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242045006"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="6">&nbsp;
    </td>


                                                                <td ref="202011242100006"
        class="unreservable slot"
        data-href="reservation.php?rid=6&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="6">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="7" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=7&sid=2&rd=2020-11-24" resourceId="7"
                           class="resourceNameSelector"
                           >105 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011240000007"
        class="unreservable slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240800007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240815007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240830007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240845007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240900007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240915007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240930007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240945007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241000007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241015007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241030007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241045007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241100007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241115007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241130007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241145007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241200007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241215007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241230007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241245007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241300007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241315007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241330007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241345007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241400007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241415007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241430007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241445007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241500007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241515007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241530007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241545007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241600007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241615007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241630007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241645007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241700007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241715007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241730007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241745007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241800007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241815007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241830007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241845007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241900007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241915007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241930007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241945007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242000007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242015007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242030007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242045007"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="7">&nbsp;
    </td>


                                                                <td ref="202011242100007"
        class="unreservable slot"
        data-href="reservation.php?rid=7&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="7">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="8" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=8&sid=2&rd=2020-11-24" resourceId="8"
                           class="resourceNameSelector"
                           >106 - Hum. - Piso 1 (2 pers.)</a>
                                    </td>
                                                                <td ref="202011240000008"
        class="unreservable slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240800008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240815008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240830008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240845008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240900008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240915008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240930008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011240945008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241000008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241015008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241030008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241045008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241100008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241115008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241130008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241145008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241200008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241215008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241230008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241245008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241300008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241315008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241330008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241345008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241400008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241415008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241430008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241445008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241500008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241515008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241530008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241545008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241600008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241615008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241630008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241645008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241700008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241715008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241730008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241745008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241800008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241815008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241830008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241845008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241900008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241915008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241930008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011241945008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242000008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242015008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242030008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="202011242045008"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="8">&nbsp;
    </td>


                                                                <td ref="202011242100008"
        class="unreservable slot"
        data-href="reservation.php?rid=8&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="8">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="15" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=15&sid=2&rd=2020-11-24" resourceId="15"
                           class="resourceNameSelector"
                           >205 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000015"
        class="unreservable slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450015"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="15">&nbsp;
    </td>


                                                                <td ref="2020112421000015"
        class="unreservable slot"
        data-href="reservation.php?rid=15&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="15">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="16" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=16&sid=2&rd=2020-11-24" resourceId="16"
                           class="resourceNameSelector"
                           >206 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000016"
        class="unreservable slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450016"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="16">&nbsp;
    </td>


                                                                <td ref="2020112421000016"
        class="unreservable slot"
        data-href="reservation.php?rid=16&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="16">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="17" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=17&sid=2&rd=2020-11-24" resourceId="17"
                           class="resourceNameSelector"
                           >207 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000017"
        class="unreservable slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450017"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="17">&nbsp;
    </td>


                                                                <td ref="2020112421000017"
        class="unreservable slot"
        data-href="reservation.php?rid=17&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="17">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="18" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=18&sid=2&rd=2020-11-24" resourceId="18"
                           class="resourceNameSelector"
                           >208 - C. Soc. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000018"
        class="unreservable slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450018"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="18">&nbsp;
    </td>


                                                                <td ref="2020112421000018"
        class="unreservable slot"
        data-href="reservation.php?rid=18&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="18">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="19" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=19&sid=2&rd=2020-11-24" resourceId="19"
                           class="resourceNameSelector"
                           >209 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000019"
        class="unreservable slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450019"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="19">&nbsp;
    </td>


                                                                <td ref="2020112421000019"
        class="unreservable slot"
        data-href="reservation.php?rid=19&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="19">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="20" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=20&sid=2&rd=2020-11-24" resourceId="20"
                           class="resourceNameSelector"
                           >210 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000020"
        class="unreservable slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450020"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="20">&nbsp;
    </td>


                                                                <td ref="2020112421000020"
        class="unreservable slot"
        data-href="reservation.php?rid=20&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="20">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="21" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=21&sid=2&rd=2020-11-24" resourceId="21"
                           class="resourceNameSelector"
                           >211 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000021"
        class="unreservable slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450021"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="21">&nbsp;
    </td>


                                                                <td ref="2020112421000021"
        class="unreservable slot"
        data-href="reservation.php?rid=21&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="21">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="22" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=22&sid=2&rd=2020-11-24" resourceId="22"
                           class="resourceNameSelector"
                           >212 - C. Tec. - Piso 2 (2 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000022"
        class="unreservable slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450022"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="22">&nbsp;
    </td>


                                                                <td ref="2020112421000022"
        class="unreservable slot"
        data-href="reservation.php?rid=22&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="22">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="57" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=57&sid=2&rd=2020-11-24" resourceId="57"
                           class="resourceNameSelector"
                           >Mesa 2 - C.Soc. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000057"
        class="unreservable slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450057"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="57">&nbsp;
    </td>


                                                                <td ref="2020112421000057"
        class="unreservable slot"
        data-href="reservation.php?rid=57&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="57">&nbsp;
    </td>


                
            </tr>
                                            <tr class="slots">
                <td class="resourcename"
                    >
                                            <span resourceId="54" class="visible-sm-inline-block hidden-md resourceNameSelector fa fa-info-circle" data-show-event="click"
                        						                              ></span>
                        <a href="reservation.php?rid=54&sid=2&rd=2020-11-24" resourceId="54"
                           class="resourceNameSelector"
                           >Mesa 3 - C.Tec. - Piso 2 (4 pers.)</a>
                                    </td>
                                                                <td ref="2020112400000054"
        class="unreservable slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2000%3A00%3A00"
        data-end="2020-11-24%2008%3A00%3A00"
        data-min="1606172400"
        data-max="1606201200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A00%3A00"
        data-end="2020-11-24%2008%3A15%3A00"
        data-min="1606201200"
        data-max="1606202100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A15%3A00"
        data-end="2020-11-24%2008%3A30%3A00"
        data-min="1606202100"
        data-max="1606203000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A30%3A00"
        data-end="2020-11-24%2008%3A45%3A00"
        data-min="1606203000"
        data-max="1606203900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112408450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2008%3A45%3A00"
        data-end="2020-11-24%2009%3A00%3A00"
        data-min="1606203900"
        data-max="1606204800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A00%3A00"
        data-end="2020-11-24%2009%3A15%3A00"
        data-min="1606204800"
        data-max="1606205700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A15%3A00"
        data-end="2020-11-24%2009%3A30%3A00"
        data-min="1606205700"
        data-max="1606206600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A30%3A00"
        data-end="2020-11-24%2009%3A45%3A00"
        data-min="1606206600"
        data-max="1606207500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112409450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2009%3A45%3A00"
        data-end="2020-11-24%2010%3A00%3A00"
        data-min="1606207500"
        data-max="1606208400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A00%3A00"
        data-end="2020-11-24%2010%3A15%3A00"
        data-min="1606208400"
        data-max="1606209300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A15%3A00"
        data-end="2020-11-24%2010%3A30%3A00"
        data-min="1606209300"
        data-max="1606210200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A30%3A00"
        data-end="2020-11-24%2010%3A45%3A00"
        data-min="1606210200"
        data-max="1606211100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112410450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2010%3A45%3A00"
        data-end="2020-11-24%2011%3A00%3A00"
        data-min="1606211100"
        data-max="1606212000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A00%3A00"
        data-end="2020-11-24%2011%3A15%3A00"
        data-min="1606212000"
        data-max="1606212900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A15%3A00"
        data-end="2020-11-24%2011%3A30%3A00"
        data-min="1606212900"
        data-max="1606213800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A30%3A00"
        data-end="2020-11-24%2011%3A45%3A00"
        data-min="1606213800"
        data-max="1606214700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112411450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2011%3A45%3A00"
        data-end="2020-11-24%2012%3A00%3A00"
        data-min="1606214700"
        data-max="1606215600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A00%3A00"
        data-end="2020-11-24%2012%3A15%3A00"
        data-min="1606215600"
        data-max="1606216500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A15%3A00"
        data-end="2020-11-24%2012%3A30%3A00"
        data-min="1606216500"
        data-max="1606217400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A30%3A00"
        data-end="2020-11-24%2012%3A45%3A00"
        data-min="1606217400"
        data-max="1606218300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112412450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2012%3A45%3A00"
        data-end="2020-11-24%2013%3A00%3A00"
        data-min="1606218300"
        data-max="1606219200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A00%3A00"
        data-end="2020-11-24%2013%3A15%3A00"
        data-min="1606219200"
        data-max="1606220100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A15%3A00"
        data-end="2020-11-24%2013%3A30%3A00"
        data-min="1606220100"
        data-max="1606221000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A30%3A00"
        data-end="2020-11-24%2013%3A45%3A00"
        data-min="1606221000"
        data-max="1606221900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112413450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2013%3A45%3A00"
        data-end="2020-11-24%2014%3A00%3A00"
        data-min="1606221900"
        data-max="1606222800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A00%3A00"
        data-end="2020-11-24%2014%3A15%3A00"
        data-min="1606222800"
        data-max="1606223700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A15%3A00"
        data-end="2020-11-24%2014%3A30%3A00"
        data-min="1606223700"
        data-max="1606224600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A30%3A00"
        data-end="2020-11-24%2014%3A45%3A00"
        data-min="1606224600"
        data-max="1606225500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112414450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2014%3A45%3A00"
        data-end="2020-11-24%2015%3A00%3A00"
        data-min="1606225500"
        data-max="1606226400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A00%3A00"
        data-end="2020-11-24%2015%3A15%3A00"
        data-min="1606226400"
        data-max="1606227300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A15%3A00"
        data-end="2020-11-24%2015%3A30%3A00"
        data-min="1606227300"
        data-max="1606228200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A30%3A00"
        data-end="2020-11-24%2015%3A45%3A00"
        data-min="1606228200"
        data-max="1606229100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112415450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2015%3A45%3A00"
        data-end="2020-11-24%2016%3A00%3A00"
        data-min="1606229100"
        data-max="1606230000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A00%3A00"
        data-end="2020-11-24%2016%3A15%3A00"
        data-min="1606230000"
        data-max="1606230900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A15%3A00"
        data-end="2020-11-24%2016%3A30%3A00"
        data-min="1606230900"
        data-max="1606231800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A30%3A00"
        data-end="2020-11-24%2016%3A45%3A00"
        data-min="1606231800"
        data-max="1606232700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112416450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2016%3A45%3A00"
        data-end="2020-11-24%2017%3A00%3A00"
        data-min="1606232700"
        data-max="1606233600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A00%3A00"
        data-end="2020-11-24%2017%3A15%3A00"
        data-min="1606233600"
        data-max="1606234500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A15%3A00"
        data-end="2020-11-24%2017%3A30%3A00"
        data-min="1606234500"
        data-max="1606235400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A30%3A00"
        data-end="2020-11-24%2017%3A45%3A00"
        data-min="1606235400"
        data-max="1606236300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112417450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2017%3A45%3A00"
        data-end="2020-11-24%2018%3A00%3A00"
        data-min="1606236300"
        data-max="1606237200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A00%3A00"
        data-end="2020-11-24%2018%3A15%3A00"
        data-min="1606237200"
        data-max="1606238100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A15%3A00"
        data-end="2020-11-24%2018%3A30%3A00"
        data-min="1606238100"
        data-max="1606239000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A30%3A00"
        data-end="2020-11-24%2018%3A45%3A00"
        data-min="1606239000"
        data-max="1606239900"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112418450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2018%3A45%3A00"
        data-end="2020-11-24%2019%3A00%3A00"
        data-min="1606239900"
        data-max="1606240800"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A00%3A00"
        data-end="2020-11-24%2019%3A15%3A00"
        data-min="1606240800"
        data-max="1606241700"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A15%3A00"
        data-end="2020-11-24%2019%3A30%3A00"
        data-min="1606241700"
        data-max="1606242600"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A30%3A00"
        data-end="2020-11-24%2019%3A45%3A00"
        data-min="1606242600"
        data-max="1606243500"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112419450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2019%3A45%3A00"
        data-end="2020-11-24%2020%3A00%3A00"
        data-min="1606243500"
        data-max="1606244400"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420000054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A00%3A00"
        data-end="2020-11-24%2020%3A15%3A00"
        data-min="1606244400"
        data-max="1606245300"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420150054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A15%3A00"
        data-end="2020-11-24%2020%3A30%3A00"
        data-min="1606245300"
        data-max="1606246200"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420300054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A30%3A00"
        data-end="2020-11-24%2020%3A45%3A00"
        data-min="1606246200"
        data-max="1606247100"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td class="reservable clickres slot"
        ref="2020112420450054"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2020%3A45%3A00"
        data-end="2020-11-24%2021%3A00%3A00"
        data-min="1606247100"
        data-max="1606248000"
        data-resourceId="54">&nbsp;
    </td>


                                                                <td ref="2020112421000054"
        class="unreservable slot"
        data-href="reservation.php?rid=54&sid=2&rd=2020-11-24"
        data-start="2020-11-24%2021%3A00%3A00"
        data-end="2020-11-25%2000%3A00%3A00"
        data-min="1606248000"
        data-max="1606258800"
        data-resourceId="54">&nbsp;
    </td>


                
            </tr>
        
        </tbody>
    </table>


                    
                </div>
            </div>
                <div class="clearfix">&nbsp;</div>
    <input type="hidden" value="2" id="scheduleId"/>

    <div class="row no-margin">
        <div class="col-sm-9 visible-md visible-lg">&nbsp;</div>
        
                                            <div class="schedule-dates col-sm-3 col-xs-12">
                                                        <a href="#" class="change-date btn-link btn-success" data-year="2020"
                               data-month="11" data-day="20"
                               alt="Hoy"><i class="fa fa-home"></i>
                                <span class="no-show">Hoy</span>
                            </a>
                                                                                    <a href="#" class="change-date" data-year="2020"
                               data-month="11"
                               data-day="15"><img src="img/arrow_large_left.png" title="Atrás" alt="Atrás"   /></a>
                            20/11/2020 - 24/11/2020
                            <a href="#" class="change-date" data-year="2020"
                               data-month="11"
                               data-day="25"><img src="img/arrow_large_right.png" title="Adelante" alt="Adelante"   /></a>

                                                            <a href="/resSalas/Web/view-schedule.php?&sfw=1"
                                   id="showFullWeek">(Mostrar semana completa)</a>
                                                    </div>
                                    
    </div>
    
</div>

<form id="moveReservationForm">
    <input id="moveReferenceNumber" type="hidden" name='referenceNumber' />
    <input id="moveStartDate" type="hidden" name='beginDate' />
    <input id="moveResourceId" type="hidden" name='resourceId' />
    <input id="moveSourceResourceId" type="hidden" name='ORIGINAL_RESOURCE_ID' />
    <input type="hidden" id="csrf_token" name="CSRF_TOKEN" value=""/>
</form>


<form id="fetchReservationsForm">
    <input type="hidden" name='beginDate' value="2020-11-20"/>
    <input type="hidden" name='endDate' value="2020-11-24"/>
    <input type="hidden" name='scheduleId' value="2"/>
    
    <input type="hidden" name='MIN_CAPACITY' value=""/>
    <input type="hidden" name='RESOURCE_TYPE_ID' value=""/>
            <input type="hidden" name="RESOURCE_ATTRIBUTE_ID[8]" value=""/>
    
    
    
    <input type="hidden" name='userId' value=""/>
    <input type="hidden" name='PARTICIPANT_ID' value=""/>
    <input type="hidden" id="csrf_token" name="CSRF_TOKEN" value=""/>
</form>

<div id="loading-schedule" class="no-show">Loading reservations...</div>


    
            
    
            
    
            
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
    <script type="text/javascript" src="scripts/js/owl-2.2.1/owl.carousel.min.js?v=2.8.4"></script>
    <script type="text/javascript" src="scripts/search-clear.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/phpscheduleit.js?v=2.8.4"></script>





<script type="text/javascript" src="scripts/js/html2canvas.min.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/js/moment.min.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/schedule.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/resourcePopup.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/js/tree.jquery.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/js/jquery.cookie.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/autocomplete.js?v=2.8.4"></script>
<script type="text/javascript" src="scripts/ajax-helpers.js?v=2.8.4"></script>
<script type="text/javascript">

    const scheduleOpts = {
        reservationUrlTemplate: "reservation.php?rn=[referenceNumber]",
        summaryPopupUrl: "ajax/respopup.php",
        setDefaultScheduleUrl: "profile.php?action=changeDefaultSchedule&sid=[scheduleId]",
        cookieName: "schedule-style-2",
        scheduleId: "2",
        scriptUrl: 'https://servicioscampus.unavarra.es/resSalas/Web',
        selectedResources: [],
        specificDates: [],
        updateReservationUrl: "ajax/reservation_move.php",
        lockTableHead: "",
        disableSelectable: "",
        reservationLoadUrl: "schedule.php?dr=reservations",
        scheduleStyle: "0",
        midnightLabel: "12:00 AM",
        isMobileView: "",
        newLabel: "New",
        updatedLabel: "Updated",
        isReservable: 1,
        autocompleteUrl: "ajax/autocomplete.php?type=user",
    };

    const resourceOrder = [];
    let resourceIndex = 0;
        resourceOrder[5] = resourceIndex++;
        resourceOrder[6] = resourceIndex++;
        resourceOrder[7] = resourceIndex++;
        resourceOrder[8] = resourceIndex++;
        resourceOrder[15] = resourceIndex++;
        resourceOrder[16] = resourceIndex++;
        resourceOrder[17] = resourceIndex++;
        resourceOrder[18] = resourceIndex++;
        resourceOrder[19] = resourceIndex++;
        resourceOrder[20] = resourceIndex++;
        resourceOrder[21] = resourceIndex++;
        resourceOrder[22] = resourceIndex++;
        resourceOrder[57] = resourceIndex++;
        resourceOrder[54] = resourceIndex++;
    
    scheduleOpts.resourceOrder = resourceOrder;

        scheduleOpts.reservationUrlTemplate = "view-reservation.php?rn=[referenceNumber]";
    scheduleOpts.reservationLoadUrl = "view-schedule.php?dr=reservations";
    scheduleOpts.isReservable = 0;
    
    $(document).ready(function () {
        const schedule = new Schedule(scheduleOpts, [{"id":0,"name":"Todo","label":"Todo","parent":null,"parent_id":null,"children":[{"type":"resource","group_id":0,"resource_name":"103 - Hum. - Piso 1 (2 pers.)","id":"resource-0-5","label":"103 - Hum. - Piso 1 (2 pers.)","resource_id":"5","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"104 - Hum. - Piso 1 (2 pers.)","id":"resource-0-6","label":"104 - Hum. - Piso 1 (2 pers.)","resource_id":"6","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"105 - Hum. - Piso 1 (2 pers.)","id":"resource-0-7","label":"105 - Hum. - Piso 1 (2 pers.)","resource_id":"7","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"106 - Hum. - Piso 1 (2 pers.)","id":"resource-0-8","label":"106 - Hum. - Piso 1 (2 pers.)","resource_id":"8","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"205 - C. Soc. - Piso 2 (2 pers.)","id":"resource-0-15","label":"205 - C. Soc. - Piso 2 (2 pers.)","resource_id":"15","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"206 - C. Soc. - Piso 2 (2 pers.)","id":"resource-0-16","label":"206 - C. Soc. - Piso 2 (2 pers.)","resource_id":"16","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"207 - C. Soc. - Piso 2 (2 pers.)","id":"resource-0-17","label":"207 - C. Soc. - Piso 2 (2 pers.)","resource_id":"17","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"208 - C. Soc. - Piso 2 (2 pers.)","id":"resource-0-18","label":"208 - C. Soc. - Piso 2 (2 pers.)","resource_id":"18","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"209 - C. Tec. - Piso 2 (2 pers.)","id":"resource-0-19","label":"209 - C. Tec. - Piso 2 (2 pers.)","resource_id":"19","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"210 - C. Tec. - Piso 2 (2 pers.)","id":"resource-0-20","label":"210 - C. Tec. - Piso 2 (2 pers.)","resource_id":"20","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"211 - C. Tec. - Piso 2 (2 pers.)","id":"resource-0-21","label":"211 - C. Tec. - Piso 2 (2 pers.)","resource_id":"21","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"212 - C. Tec. - Piso 2 (2 pers.)","id":"resource-0-22","label":"212 - C. Tec. - Piso 2 (2 pers.)","resource_id":"22","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"Mesa 2 - C.Soc. - Piso 2 (4 pers.)","id":"resource-0-57","label":"Mesa 2 - C.Soc. - Piso 2 (4 pers.)","resource_id":"57","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":0,"resource_name":"Mesa 3 - C.Tec. - Piso 2 (4 pers.)","id":"resource-0-54","label":"Mesa 3 - C.Tec. - Piso 2 (4 pers.)","resource_id":"54","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"1","name":"Biblioteca - STG","label":"Biblioteca - STG","parent":null,"parent_id":null,"children":[{"id":"4","name":"Ciencia y Tecnolog\u00eda","label":"Ciencia y Tecnolog\u00eda","parent":null,"parent_id":"1","children":[{"type":"resource","group_id":"4","resource_name":"209 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-19","label":"209 - C. Tec. - Piso 2 (2 pers.)","resource_id":"19","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"210 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-20","label":"210 - C. Tec. - Piso 2 (2 pers.)","resource_id":"20","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"211 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-21","label":"211 - C. Tec. - Piso 2 (2 pers.)","resource_id":"21","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"212 - C. Tec. - Piso 2 (2 pers.)","id":"resource-4-22","label":"212 - C. Tec. - Piso 2 (2 pers.)","resource_id":"22","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"4","resource_name":"Mesa 3 - C.Tec. - Piso 2 (4 pers.)","id":"resource-4-54","label":"Mesa 3 - C.Tec. - Piso 2 (4 pers.)","resource_id":"54","resourceAdminGroupId":"30094","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"3","name":"Ciencias Sociales","label":"Ciencias Sociales","parent":null,"parent_id":"1","children":[{"type":"resource","group_id":"3","resource_name":"205 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-15","label":"205 - C. Soc. - Piso 2 (2 pers.)","resource_id":"15","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"206 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-16","label":"206 - C. Soc. - Piso 2 (2 pers.)","resource_id":"16","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"207 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-17","label":"207 - C. Soc. - Piso 2 (2 pers.)","resource_id":"17","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"208 - C. Soc. - Piso 2 (2 pers.)","id":"resource-3-18","label":"208 - C. Soc. - Piso 2 (2 pers.)","resource_id":"18","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"3","resource_name":"Mesa 2 - C.Soc. - Piso 2 (4 pers.)","id":"resource-3-57","label":"Mesa 2 - C.Soc. - Piso 2 (4 pers.)","resource_id":"57","resourceAdminGroupId":"30093","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"},{"id":"2","name":"Humanidades","label":"Humanidades","parent":null,"parent_id":"1","children":[{"type":"resource","group_id":"2","resource_name":"103 - Hum. - Piso 1 (2 pers.)","id":"resource-2-5","label":"103 - Hum. - Piso 1 (2 pers.)","resource_id":"5","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"2","resource_name":"104 - Hum. - Piso 1 (2 pers.)","id":"resource-2-6","label":"104 - Hum. - Piso 1 (2 pers.)","resource_id":"6","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"2","resource_name":"105 - Hum. - Piso 1 (2 pers.)","id":"resource-2-7","label":"105 - Hum. - Piso 1 (2 pers.)","resource_id":"7","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1},{"type":"resource","group_id":"2","resource_name":"106 - Hum. - Piso 1 (2 pers.)","id":"resource-2-8","label":"106 - Hum. - Piso 1 (2 pers.)","resource_id":"8","resourceAdminGroupId":"30092","scheduleId":"2","statusId":"1","scheduleAdminGroupId":"3","requiresApproval":1,"isCheckInEnabled":0,"isAutoReleased":false,"autoReleaseMinutes":null,"minLength":{},"resourceTypeId":"1","color":"","textColor":"","maxConcurrentReservations":1}],"type":"group"}],"type":"group"},{"id":"8","name":"Campus Tudela","label":"Campus Tudela","parent":null,"parent_id":null,"children":[],"type":"group"},{"id":"9","name":"CC Salud","label":"CC Salud","parent":null,"parent_id":null,"children":[],"type":"group"},{"id":"11","name":"PE Arrosadia","label":"PE Arrosadia","parent":null,"parent_id":null,"children":[{"id":"12","name":"PE ALUM Zona A","label":"PE ALUM Zona A","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"13","name":"PE ALUM Zona B","label":"PE ALUM Zona B","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"14","name":"PE ALUM Zona C","label":"PE ALUM Zona C","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"15","name":"PE ALUM Zona D","label":"PE ALUM Zona D","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"16","name":"PE CS","label":"PE CS","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"17","name":"PE CT","label":"PE CT","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"18","name":"PE HUM","label":"PE HUM","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"19","name":"PE REFE","label":"PE REFE","parent":null,"parent_id":"11","children":[],"type":"group"},{"id":"20","name":"PE REVI","label":"PE REVI","parent":null,"parent_id":"11","children":[],"type":"group"}],"type":"group"},{"id":"22","name":"PE Campus Tudela","label":"PE Campus Tudela","parent":null,"parent_id":null,"children":[],"type":"group"},{"id":"21","name":"PE Salud","label":"PE Salud","parent":null,"parent_id":null,"children":[],"type":"group"},{"id":"10","name":"Puestos de Estudio","label":"Puestos de Estudio","parent":null,"parent_id":null,"children":[],"type":"group"},{"id":"5","name":"Salas Servicio Inform\u00e1tico","label":"Salas Servicio Inform\u00e1tico","parent":null,"parent_id":null,"children":[],"type":"group"}]);
        schedule.init();
    });

    $('#schedules').select2({
        width: 'resolve'
    });
</script>








<script type="text/javascript">
    $(function () {
        $("#datepicker").datepicker({
            numberOfMonths: 3,
            showButtonPanel: true,
            onSelect: dpDateChanged,
            dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
            dateFormat: 'dd/mm/yy',
                        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
            currentText: "Hoy",
            timeFormat: "h:mm tt",
            altFieldTimeOnly: false,
            controlType: 'select'
                                    ,
            defaultDate: new Date(2020, 10, 20)

                                                });

        
    });
</script>



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
