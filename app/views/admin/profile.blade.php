@extends('admin.master')
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header callout callout-info">
            <h1>
                Transaction
                <small>Details</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content" style="color:#00733e">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">User Details</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <caption></caption>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Name</td>
                            <td>XXX</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Roll No.</td>
                            <td>130101099</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Dues </td>
                            <td>999</td>  <!-- include the variable-->
                            <td><button type="button" class="btn pull-right btn-xs btn-success" data-toggle="modal"  data-target="#payment">Pay</button></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Default box -->
            <div class="box">
                <!--Expand and collapse buttonss-->
                <div class="box-header with-border">
                    <h3 class="box-title">Books</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!--Main content of the box-->
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <img src="#" class="img-thumbnail">

                            <button type="button" class="btn-xs btn-flat btn-info" data-toggle="modal" data-target="#details">
                                Details
                            </button>
                        </div>

                        <div class="col-xs-6 col-md-6">
                            <img src="#" class="img-thumbnail">

                            <button type="button" class="btn-xs btn-flat btn-info" data-toggle="modal" data-target="#details">
                                Details
                            </button>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <img src="#" class="img-thumbnail">

                            <button type="button" class="btn-xs btn-flat btn-info" data-toggle="modal" data-target="#details">
                                Details
                            </button>
                        </div>

                        <div class="col-xs-6 col-md-6">
                            <img src="#" class="img-thumbnail">

                            <button type="button" class="btn-xs btn-flat btn-info" data-toggle="modal" data-target="#details">
                                Details
                            </button>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <img src="#" class="img-thumbnail">

                            <button type="button" class="btn-xs btn-flat btn-info" data-toggle="modal" data-target="#details">
                                Details
                            </button>
                        </div>

                    </div>
                </div><!-- /.box-body -->


            </div><!-- /.box -->











        </section><!-- /.content -->

    <!-- Book Details Modal -->
    <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="color:#00a65a">
                <div class="modal-header" style="color:blue">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Book Details</h4>
                </div>
                <div class="modal-body">

                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <td>Introduction to Algorithm</td>
                        </tr>
                        <tr>
                            <th>Authors</th>
                            <td>Charles E. Leiserson, Thomas H. Cormen, Clifford Stein, Ronald Rivest</td>
                        </tr>
                        <tr>
                            <th>
                                Publication
                            </th>
                            <td>
                                3rd Edition
                            </td>
                        </tr>
                        <tr>
                            <th>ISBN</th>
                            <td>9781423724605</td>
                        </tr>
                        <tr>
                            <th>Book Code</th>
                            <td>4545</td>
                        </tr>
                        <tr>
                            <th>Issue Date</th>
                            <td>04-04-2015</td>
                        </tr>
                        <tr>
                            <th>
                                Return Date
                            </th>
                            <td>
                                03-05-2015
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-flat btn-info">Return</button>
                    <button type="button" class="btn btn-flat btn-warning">Reissue</button>
                    <button type="button" class="btn btn-flat  btn-danger" data-toggle="modal" data-target="#lost">Lost</button>
                    <button type="button" class="btn btn-flat btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-flat btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Payment Modal -->
    <div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="payModalLabel">No Dues Panel</h4>
                </div>
                <div class="modal-body">
                    <div class="box box-body row">
                        <table class="table" margin="0">
                            <tr>
                                <th>Amount Payable</th>
                                <td>
                                    <form role="form" id="fine">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Dues">
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>

                    </br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Lost Modal -->

    <div class="modal fade" id="lost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content " style="color:#00a65a">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Lost Book Panel</h4>
                </div>
                <div class="modal-body">

                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>Attribute</th>
                            <th>Old</th>
                            <th>New</th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>Introduction to Algorithm</td>
                            <td><input type="text" class="form-control" id="title"></td>
                        </tr>
                        <tr>
                            <th>Authors</th>
                            <td>Charles E. Leiserson, Thomas H. Cormen, Clifford Stein, Ronald Rivest</td>
                            <td><input type="text" class="form-control" id="authors"></td>
                        </tr>
                        <tr>
                            <th>Publication</th>
                            <td>3rd Edition</td>
                            <td><input type="" class="form-control" id="edition"></td>
                        </tr>
                        <tr>
                            <th>ISBN</th>
                            <td>9781423724605</td>
                            <td><input type="number" class="form-control" id="ISBN"></td>
                        </tr>
                        <tr>
                            <th>Publication</th>
                            <td>PHI</td>
                            <td><input type="text" class="form-control" id="publication"></td>
                        </tr>
                        <tr>
                            <th>Book Code</th>
                            <td>4545</td>
                            <td><input type="number" class="form-control" id="code"></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer">

                        Book lost by  <strong>//{ $usr }}</strong>

                    </div>
                    <button type="button" class="btn-md btn-flat btn-primary pull-right">
                        Added
                    </button>
                    </br>
                    <!--
                        <div class="row">
                            <div class="col-md-4">
                                Name of the Book:
                            </div>
                            <div class="col-md-4">
                                 // $old->title}}
                            </div>
                            <div class="col-md-4">
                                // $new->title}}

                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                Authors of the book:
                            </div>
                            <div class="col-md-4">
                                //{ $old->authors }}
                            </div>
                            <div class="col-md-4">
                                //{ $new->authors }}
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                Edition of book:
                            </div>
                            <div class="col-md-4">
                                //{ $old->edition }}
                            </div>
                            <div class="col-md-4">
                                //{ $new->edition }}
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                ISBN of the book:
                            </div>
                            <div class="col-md-4">
                                //{ $old->ISBN }}
                            </div>
                            <div class="col-md-4">
                                //{ $new->ISBN }}
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                Publication of the book:
                            </div>
                            <div class="col-md-4">
                                //{ $new->publication }}
                            </div>
                            <div class="col-md-4">
                                //{ $pub }}
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                Code of the book:
                            </div>
                            <div class="col-md-4">
                                //{ $new->code }}
                            </div>
                            <div class="col-md-4">
                                //{ $old->code  }}
                            </div>
                        </div>-
                        <br />
                    </div>-->




                </div>
            </div>
        </div>
    </div>



@endsection