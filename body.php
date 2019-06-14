<body>

<hr>
<article style="overflow: hidden;">                         <!-- Main Content of the page -->
<iframe height="100%" width="104%" src="mainbody.php" name="body_iframe"></iframe>

</article>						


<aside style="margin-top: 50px">
<form action="asidequery.php" method="POST" target="body_iframe">
		<select name="brand_slt">
			<option value="$">All Brands</option>
			<option value="1">Samsung</option>
			<option value="2">JBL</option>
			<option value="3">Levis</option>			
		</select>
		<input type="text" name="srchid"  placeholder="ProductName">
		<br>
		<input type="range" min="1" max="30000" step="1" value="1" id="foo" name="minprice" onchange='document.getElementById("bar").value =      "Min Price= " + document.getElementById("foo").value;'/>
			<input type="text" name="bar" id="bar" value="Min Price= 1" disabled />
		
		<input type="range" min="1" max="30000" step="1" value="30000" id="fooo" name="maxprice" onchange='document.getElementById("barr").value =      "Max Price= " + document.getElementById("fooo").value;'/>
			<input type="text" name="barr" id="barr" value="Max Price= 30000" disabled />
			<label style="font-family:aerial;font-size: 15px">Sort by Price</label>	<br>
			<input type="radio" name="order" value="asc" checked> <label style="font-family:aerial;font-size: 15px">Ascending</label><br>
			<input type="radio" name="order" value="desc">	<label style="font-family:aerial;font-size: 15px">Descending</label>
	<input type="submit" name="search" value="search" >	

	</form>

	<form action="brandquery2.php" method="post" target="body_iframe">
			<select name="brand_slt" size="15" multiple="multiple">
                <option value="1">Samsung</option>
                <option value="2">JBL</option>
                <option value="3">Levis</option>
                <option value="4">Nike</option>
                <option value="5">Hawkings</option>
                <option value="6">Cadbury</option>
                <option value="7">Loius Vuitton</option>
                <option value="8">LG</option>
                <option value="9">DELL</option>
                <option value="10">Gucci</option>
                <option value="11">Funny Tools</option>
                <option value="12">Yamaha</option>
                <option value="13">Casio</option>
                <option value="14">Bangemuda</option>
                <option value="15">Chetan Bhagat</option>
            </select>
			<button type="submit" id="search_btn" class="search-btn">Search</button>
		</form>
</aside>

</body>