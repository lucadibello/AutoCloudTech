<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motor Factor Software System</title>
</head>

<body>
    <div class="view jarallax" style="height: 60vh;">
        <img class="jarallax-img" src="https://images.unsplash.com/photo-1530046339160-ce3e530c7d2f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
        <div class="mask rgba-blue-slight">
            <div class="container flex-center text-center">
                <div class="row mt-5">
                    <div class="col-md-12 mb-3 animated slideInDown">
                        <h1 class="title h1 my-3 font-weight-bold"><span class="red-text">Garage Software System</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="margin-y">
            <div class="row">
                <div class="col-md-3 text-right title">
                    <h5 class="font-weight-bold">Tech RMI <h5>(Repair Maintenance Information)</h5>
                </div>
                <div class="col-md-7 text-center">
                    <section class="mb-5">
                        <h6 class="font-weight-bold">Manufacturer-compliant repair and maintenance data for vehicle workshops, parts dealers and fleet/leasing companies</h6>
                    </section>
                    <section class="mb-4">
                        <h5>Features</h5>
                    </section>
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-search"></i>
                            <p>Graphic selection of parts</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-hand-pointer"></i>
                            <p>Search and selection option for due inspections with ServiceFinder</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-car"></i>
                            <p>Vehicle identification via VIN, national codes such as KBA, or conventionally via manufacturer – model – type</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-warehouse"></i>
                            <p>Manufacturer-compliant standard labour times with integrated overlap calculations</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-book"></i>
                            <p>Turnkey interfaces for integration into spare parts catalogues</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-tools"></i>
                            <p>Display of the special tools required, including OE number, in the repair instructions</p>
                        </div>
                    </div>
                    <section class="mb-4 mt-5">
                        <h5>Key Facts</h5>
                    </section>
                    <div class="row">
                        <div class="col-md-4 offset-md-2">
                            <i class="fas fa-book-open"></i>
                            <p>3.9 million repair instructions</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-wrench"></i>
                            <p>4.2 million service plans with 22.8 million standard labour times</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fas fa-language"></i>
                            <p>24 languages</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-globe-americas"></i>
                            <p>Europe-wide vehicle information</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-database"></i>
                            <p>7.7 million items of technical data</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="margin-y" id="tecdoc-section">
            <div class="row">
                <div class="col-md-3 text-right title">
                    <h5>Search by vehicle make</h5>
                </div>
                <div class="col-md-7 text-center">
                    <p>This is done by entering your Irish/UK Registration Plate. <br>
                        Once you've entered your registration plate, you will be able to view the car details.
                    </p>
                    <img src="./application/assets/img/motorfactory-screenshots/carmake.png" class="img-fluid" alt="Car Make">
                </div>
            </div>
        </section>

        <section class="margin-y mb-5" id="partnumber-section">
            <div class="row">
                <div class="col-md-3 text-right title">
                    <h5>Search by part number</h5>
                </div>
                <div class="col-md-7 text-center">
                    <p>This is done by inputting the part numer.</p>
                    <img src="./application/assets/img/motorfactory-screenshots/partnumber.png" class="img-fluid" alt="Part Number">

                    <hr>
                    <h6>Videos</h6>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#partNumberLookup">
                        Search by part number
                    </button>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderProduct">
                        Order component
                    </button>
                </div>
            </div>
        </section>

        <section class="margin-y" id="booking-section">
            <div class="row">
                <div class="col-md-3 text-right title">
                    <h5>Booking</h5>
                </div>
                <div class="col-md-7 text-center">
                    <p>
                        The Service Booking Diary is a visual aid that allows you to see at a quick glance, which days have space available for further bookings.
                        As service jobs are booked into the calendar, the hours for that day go down and the colour changes. <br><br>
                        The diary also allows you to see which Courtesy Cars are available, free MOT slots and which technicians are working on which jobs.</p>
                    <img src="./application/assets/img/motorfactory-screenshots/booking.png" class="img-fluid" alt="Booking">
                </div>
            </div>
        </section>

        <section class="margin-y" id="accounting-section">
            <div class="row">
                <div class="col-md-3 text-right title">
                    <h5>Accounting & Finance</h5>
                </div>
                <div class="col-md-7 text-center">
                    <div class="row">
                        <div class="col-md-4 m-2">
                            <p class="font-weight-bold">Trial Balance</p>
                        </div>
                        <div class="col-md-4 m-2">
                            <p class="font-weight-bold">Invoices</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 m-2">
                            <p class="font-weight-bold">Expenses</p>
                        </div>
                        <div class="col-md-4 m-2">
                            <p class="font-weight-bold">User Level Access Control</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 m-2">
                            <p class="font-weight-bold">VAT</p>
                        </div>
                        <div class="col-md-4 m-2">
                            <p class="font-weight-bold">Integrate Other Accounting Packeges</p>
                        </div>
                    </div>
                    <img src="./application/assets/img/motorfactory-screenshots/accounting.png" class="img-fluid" alt="Accounting">
                </div>
            </div>
        </section>

        <section class="margin-y" id="invoicing--section">
            <div class="row">
                <div class="col-md-3 text-right title">
                    <h5>Invoicing & Margin reports</h5>
                </div>
                <div class="col-md-7 text-center">
                    <p>
                        Our garage software includes jobsheets, estimates and sales invoices. Our flexible approach enables you to create documents using menu priced jobs and invoices. Invoices can be easily split into insurance/excess Invoices.
                    </p>

                    <!--
                    <img src="./application/assets/img/motorfactory-screenshots/.png" class="img-fluid" alt="Booking">
                    -->
                </div>
            </div>
        </section>

        <!-- Modal Order Product -->
        <div class="modal fade" id="orderProduct" tabindex="-1" role="dialog" aria-labelledby="orderProduct" aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderProductLabel">Order component</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video controls>
                                <source src="./application/assets/olive/renders/buy-component.webm" type="video/webm">
                                Your browser does not support videos.
                            </video>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Part number  -->
        <div class="modal fade" id="partNumberLookup" tabindex="-1" role="dialog" aria-labelledby="partNumberLookup"
             aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="partNumberLookupLabel">Part number</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video controls>
                                <source src="./application/assets/olive/renders/part-number.webm" type="video/webm">
                                Your browser does not support videos.
                            </video>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>