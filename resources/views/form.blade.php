@extends('layout.master')
@section('title','form')
@section('page_head')

@endsection

@section('bredscrum')
<section class="content-header">
      <h1>
        General Form Elements
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active">General Elements</li>
      </ol>
    </section>
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Default Basic Forms</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
            	<div class="form-group row">
				  <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
				  <div class="col-sm-10">
					<input class="form-control" type="text" value="Johen Doe" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
				  <div class="col-sm-10">
					<input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
				  <div class="col-sm-10">
					<input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
				  <div class="col-sm-10">
					<input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
				  <div class="col-sm-10">
					<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
				  <div class="col-sm-10">
					<input class="form-control" type="password" value="hunter2" id="example-password-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
				  <div class="col-sm-10">
					<input class="form-control" type="number" value="42" id="example-number-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
				  <div class="col-sm-10">
					<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
				  <div class="col-sm-10">
					<input class="form-control" type="date" value="2011-08-19" id="example-date-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
				  <div class="col-sm-10">
					<input class="form-control" type="month" value="2011-08" id="example-month-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
				  <div class="col-sm-10">
					<input class="form-control" type="week" value="2011-W33" id="example-week-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
				  <div class="col-sm-10">
					<input class="form-control" type="time" value="13:45:00" id="example-time-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
				  <div class="col-sm-10">
					<input class="form-control" type="color" value="#563d7c" id="example-color-input">
				  </div>
				</div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
     
      <div class="row">
        <!-- left column -->
        <div class="col-xl-6 col-lg-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-element">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block text-red">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="basic_checkbox_1">
					<label for="basic_checkbox_1">Check me out</label>                  
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Different Height</h3>
            </div>
            <div class="box-body form-element">
              <input class="form-control input-lg" type="text" placeholder=".input-lg">
              <br><br>
              <input class="form-control" type="text" placeholder="Default input">
              <br><br>
              <input class="form-control input-sm" type="text" placeholder=".input-sm">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Different Width</h3>
            </div>
            <div class="box-body form-element">
              <div class="row">
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder=".col-sm-3">
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" placeholder=".col-sm-4">
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder=".col-sm-5">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Input addon -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Input Addon</h3>
            </div>
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <br>

              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
              </div>

              <h4>With icons</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <br>

              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
              </div>

              <h4>With checkbox and radio inputs</h4>

              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox" id="addon_Checkbox_1">
					  	  <label for="addon_Checkbox_1" style="padding-left: 20px;height: 13px;"></label>
                        </span>
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input name="group1" type="radio" id="addon_Option_1">
					      <label for="addon_Option_1" style="padding-left: 20px;height: 13px;"></label>
                        </span>
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->

              <h4>With buttons</h4>

              <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

              <div class="input-group input-group-lg">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action</button>
                  <div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				  </div>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
              </div>
              <!-- /input-group -->
              <p class="margin">Normal</p>

              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-danger">Action</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
              </div>
              <!-- /input-group -->
              <p class="margin">Small <code>.input-group.input-group-sm</code></p>

              <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-xl-6 col-lg-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal form-element">
              <div class="box-body">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="ml-auto col-sm-10">
                    <div class="checkbox">
						<input type="checkbox" id="Remember">
						<label for="Remember">Remember me</label> 
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form>
                <!-- text input -->
                <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Text Disabled</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Textarea Disabled</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                </div>

                <!-- input states -->
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                    warning</label>
                  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                  <span class="help-block">Help block with warning</span>
                </div>
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                  <span class="help-block">Help block with error</span>
                </div>

                <!-- checkbox -->
                <div class="form-group">
                  <div class="checkbox">
                      <input type="checkbox" id="Checkbox_1">
					  <label for="Checkbox_1">Checkbox 1</label>
                  </div>

                  <div class="checkbox">
                      <input type="checkbox" id="Checkbox_2">
					  <label for="Checkbox_2">Checkbox 2</label>
                  </div>

                  <div class="checkbox">
                     <input type="checkbox" id="Checkbox_3" disabled>
					 <label for="Checkbox_3">Checkbox disabled</label>                      
                  </div>
                </div>

                <!-- radio -->
                <div class="form-group">
                  <div class="radio">
                  	  <input name="group1" type="radio" id="Option_1" checked>
					  <label for="Option_1">Option one is this and that&mdash;be sure to include why it's great</label>                    
                  </div>
                  <div class="radio">
                  	  <input name="group1" type="radio" id="Option_2" >
					  <label for="Option_2">Option two can be something else and selecting it will deselect option one</label>   
                  </div>
                  <div class="radio">
                  	  <input name="group1" type="radio" id="Option_3" disabled>
					  <label for="Option_3">Option three is disabled</label> 
                  </div>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Disabled</label>
                  <select class="form-control" disabled>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

                <!-- Select multiple-->
                <div class="form-group">
                  <label>Select Multiple</label>
                  <select multiple class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Multiple Disabled</label>
                  <select multiple class="form-control" disabled>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
      
    </section>
  
  @endsection

@section('page_script')

@endsection
