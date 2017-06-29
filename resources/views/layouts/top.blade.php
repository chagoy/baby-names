@extends ('welcome')

@section ('content')
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<table class="table table-sm table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Year</th>
							<th>Babies</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($boys as $boy)
							<tr>
								<th>
									{{ $loop->iteration }}
								</th>
								<th>
									{{ $boy->name }}
								</th>
								<th>
									<a href="/{{ $boy->year }}">
										{{ $boy->year }}
									</a>
								</th>
								<th>
									{{ number_format($boy->count) }}
								</th>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div class="col-md-5">
				<table class="table table-sm table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Year</th>
							<th>Babies</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($girls as $girl)
							<tr>
								<th>
									{{ $loop->iteration }}
								</th>
								<th>
									{{ $girl->name }}
								</th>
								<th>
									<a href="/{{ $girl->year }}">
										{{ $girl->year }}
									</a>
								</th>
								<th>
									{{ number_format($girl->count) }}
								</th>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection