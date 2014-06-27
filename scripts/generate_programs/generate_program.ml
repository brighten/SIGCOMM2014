open Printf
open Util

let encode_html str =
	let str = Str.global_replace (Str.regexp "&") "&amp;" str in
	let str = Str.global_replace (Str.regexp "è") "&egrave;" str in
	let str = Str.global_replace (Str.regexp "ó") "&oacute;" str in
	let str = Str.global_replace (Str.regexp "á") "&aacute;" str in
	let str = Str.global_replace (Str.regexp "ä") "&auml;" str in
	let str = Str.global_replace (Str.regexp "ü") "&uuml;" str in
	let str = Str.global_replace (Str.regexp "Ö") "&Ouml;" str in
	let str = Str.global_replace (Str.regexp "ö") "&ouml;" str in
	let str = Str.global_replace (Str.regexp "\"") "&quot;" str in
	if matches str ".*[^a-zA-Z0-9 –:#';,\\.\\?\\+()&/ -].*" then (
		printf "String needs to be escaped: \"%s\"\n" str;
		assert false
		)
	else
		str

let print_one_program in_tsv_path out_php_path =
	let items, _ = load_tsv_with_column_names in_tsv_path in
	
	let out_file = open_out out_php_path in
	
	fprintf out_file "
		<ul data-role=\"listview\"
			data-filter=\"true\"
			data-inset=\"true\"
			data-theme=\"d\"
			data-content-theme=\"d\"
			class=\"tprog\">\n
		";
	
	foreach items (fun item ->
		if item.(0) <> "" then (
			(* New session *)
			fprintf out_file "
				<?php tprog_add_session(
					\"%s\",
					\"%s\",
					\"%s\");
					?>
				"
				(encode_html item.(0)) (* Session Time *)
				(encode_html item.(1)) (* Title *)
				(encode_html item.(2)) (* Session chair *)
			)
		else (
			(* Item within session *)
			fprintf out_file "			
				<?php tprog_add_item(
					\"%s\",
					\"%s\",
					\"%s\",
					\"%s\",
					\"%s\",
					\"%s\");
					?>
				"
				(encode_html item.(1)) (* Title *)
				""       (* Unused? *)
				(encode_html item.(2)) (* Authors *)
				""		 (* Paper *)
				""		 (* Slides *)
				""		 (* Video *)
			)
		);

	fprintf out_file "</ul>\n";
	
	close_out out_file

(*********** Config *************)

let programs = [
	"hotsdn";
	"allthingscellular";
	"n2women";
	"csws";
	"dcc";
	"sigcomm";
	"srif"
	]

let tsv_base_path = "input_data"
let output_base_path = "../../web/include/program"

let main =
	foreach programs (fun p ->
		let in_tsv_path = sprintf "%s/%s.tsv" tsv_base_path p in
		let out_php_path = sprintf "%s/%s.php" output_base_path p in
		
		print_one_program in_tsv_path out_php_path
		)
