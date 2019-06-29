<!DOCTYPE html>
<html lang="en">
@include('templates.partials._head')
<body>
<!-- Begin page -->
<div id="wrapper">
	<!-- Top Bar Start -->
	@include('templates.partials._navbar')
	<!-- Top Bar End -->
	<!-- ========== Left Sidebar Start ========== -->
	
			<!--- Sidemenu -->
			@include('templates.partials._sidebar')
			<!-- Sidebar -->
			
	<!-- Left Sidebar End -->
	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="content-page">
		<!-- Start content -->
		@yield('main')
		<!-- content -->
		<footer class="footer">© 2019 Pemula Laravel <span class="d-none d-sm-inline-block">- Created by Hamba Allah</span>.</footer>
	</div>
	<!-- ============================================================== -->
	<!-- End Right content here -->
</div>
<!-- END wrapper -->
<!-- jQuery  -->
@include('templates.partials._script')
</body>
</html>