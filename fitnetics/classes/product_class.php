<?php
//connect to database class
require("../settings/db_class.php");

class product_class extends db_connection{
	//--INSERT--//
	//add brand
	function add_brand_cls($bname){
		$sql = "INSERT INTO brands(brand_name) VALUES ('$bname')";
		return $this-> db_query($sql);
	}

	//add category
	function add_category_cls($cname){
		// code...
		$sql = "INSERT INTO categories(cat_name) VALUES ('$cname')";
		return $this-> db_query($sql);
	}

	//add product
	function add_product_cls($pcat,$ptitle,$pprice,$pdesc,$pimage,$pkey){
		$sql = "INSERT INTO products(product_cat,product_title,product_price,product_desc,product_image,product_keywords) VALUES ('$pcat','$ptitle','$pprice','$pdesc','$pimage','$pkey')";
		return $this-> db_query($sql);
	}


	//--SELECT--//
	function get_all_brand_cls(){
		$sql ="SELECT * FROM brands";
		return $this-> db_fetch_all($sql);
	}

	function get_one_brand_cls($bidd){
		$sql ="SELECT * FROM brands WHERE brand_id = '$bidd'";
		return $this-> db_fetch_one($sql);
	}

	function get_all_category_cls(){
		// code...
		$sql ="SELECT * FROM categories";
		return $this-> db_fetch_all($sql);
	}

	function get_one_category_cls($cidd){
		$sql ="SELECT * FROM categories WHERE cat_id = '$cidd'";
		return $this-> db_fetch_one($sql);
	}
	
	function get_all_product_cls(){
		// code...
		$sql ="SELECT * FROM products";
		return $this-> db_fetch_all($sql);
	}

	function get_one_product_cls($pidd){
		$sql ="SELECT * FROM products WHERE product_id = '$pidd'";
		return $this-> db_fetch_one($sql);
	}

	function search_product_cls($find){
        $sql = "SELECT * FROM products WHERE product_title like '%$find%'";
        return $this->db_fetch_all($sql);
    }

    function select_total_qty_from_cart_cls($c_id){
        $sql = "SELECT SUM(qty) FROM cart WHERE c_id=$c_id";
        return $this-> db_fetch_all($sql);   
    }



	

	//--UPDATE--//
	function update_brand_cls($bnamee,$bid){
		$sql = "UPDATE brands SET brand_name='$bnamee' WHERE brand_id='$bid'";
		return $this-> db_query($sql); 
	}

	function update_category_cls($cnamee,$cidd){
		$sql = "UPDATE categories SET cat_name='$cnamee' WHERE cat_id='$cidd'";
		return $this-> db_query($sql); 
	}

	function update_product_cls($pid,$pcat,$ptitle,$pprice,$pdesc,$pimage,$pkey){
		$sql = "UPDATE products SET product_title='$ptitle',product_cat='$pcat', product_price='$pprice',product_desc='$pdesc', product_keywords='$pkey',product_image='$pimage' WHERE product_id='$pid'";
		return $this-> db_query($sql); 
	}



	//--DELETE--//
	function delete_brand_cls($bid){
		$sql = "DELETE FROM brands WHERE brand_id='$bid'";
	}

}
?>