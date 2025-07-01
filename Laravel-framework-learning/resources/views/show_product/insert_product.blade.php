<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
</head>
<body>
	<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>
<form method="post">
    	@csrf
		<fieldset>
			<legend>Product</legend>
			<table>

				<tr>
					<td><br>product_name</td>
					<td><br><input type="text" name="p_name" value="{{old('p_name')}}">

                    <span>{{ $errors->first('p_name') }}</span>

					</td>
				</tr>
				
                
				<tr>
					<td><br>Category</td>
					<td><br><input type="text" name="category" value="{{old('category')}}">

                     <span>{{ $errors->first('category') }}</span>
					</td>
				</tr>

				<tr>
					<td><br>unit_price</td>
					<td><br><input type="text" name="unit_price" value="{{old('unit_price')}}">

                    <span>{{ $errors->first('unit_price') }}</span>
					</td>
				</tr>

				<tr>
					
					<label for="select">Select Product status</label>
                                        <select name="product_status">
                                             <option value=""></option>

                                             <option value="existing" {{ old('product_status') == "existing" ? 'selected' : '' }}>Existing</option>

                                             <option value="upcomming" {{ old('Product_status') == "upcomming" ? 'selected' : '' }}>Up comming</option>

                                             
                                        </select>

                            <span>{{ $errors->first('product_status') }}</span>

				</tr>

				

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Store"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>