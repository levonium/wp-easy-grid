(function( $ ) {
	'use strict';


	 $(function() {

		 // the media button
		 $(document).ready(function(){
			 $("#wp-easy-grid-button").click(wp_grid_open_select_box);
			 $(".wp_grid_show_columns").click(wp_grid_open_select_box_columns);
			 $(".wp_grid_show_cells").click(wp_grid_open_select_box_cells);
			 $(".wp_grid_show_grid").click(wp_grid_open_select_box_grid);
			 $(".shortcode_add").click(wp_grid_select_shortcode)
		 });

		 // main button click function
		 // opens a dropdown
		 function wp_grid_open_select_box(event){
			 event.preventDefault();
			 // alert("hello");
			 $(".wp_grid_select_box").toggle();
		 }

		 // dropdown first option click function
		 // opens a dropdown on the right
		 // columns
		 function wp_grid_open_select_box_columns(event) {
			 event.preventDefault();
			 $(".wp_grid_select_columns").toggle();
		 }

		 // fropdown second option click function
		 // opens a dropdown on the right
		 // cells
		 function wp_grid_open_select_box_cells(event){
			 event.preventDefault();
			 $(".wp_grid_select_cells").toggle();
		 }

		 // dropdown third option click function
		 // adds an empty grid to wp editor
		 function wp_grid_open_select_box_grid(event){
			 event.preventDefault();
			 $(".wp_grid_select_grid").toggle();
			 // var wp_grid_shortcode = "[easy_grid class='' id=''][/easy_grid]";
			 // wp_grid_add_to_editor(wp_grid_shortcode);
		 }

		 // function to pass the shortcode data-grid value
		 function wp_grid_select_shortcode(){
			 var shortcode_type;
			 var wp_grid_cells;
			 var shortcode_var = $(this).attr("grid-type");
			 // alert( shortcode_var);
			 switch (shortcode_var) {
			 	case 'col':
			 		shortcode_type	= "column";
					wp_grid_cells		= $(this).attr("data-grid");
			 		break;
				case 'cell':
					shortcode_type	= "cell";
					wp_grid_cells		= $(this).attr("data-grid");
					break;
				case 'grid':
					shortcode_type	= "grid";
					wp_grid_cells		= $(this).attr("data-grid");
					break;
			 	default:
			 }

			 wp_grid_make_shortcode(shortcode_type, wp_grid_cells);
		 }

		 // function to make the shortcode
		 function wp_grid_make_shortcode(shortcode_type, wp_grid_cells){
			 var wp_grid_shortcode; // "["+shortcode_type+"] ... [/"+shortcode_type+"]";
			 var shortcode_name;

			 if ( "column" === shortcode_type ) {
				 if ( "two_halves" === wp_grid_cells ) {
					 shortcode_name = 'half_grid';
					 wp_grid_shortcode = "[easy_grid class='' id='']["+shortcode_name+"] ... [/"+shortcode_name+"]["+shortcode_name+"] ... [/"+shortcode_name+"][/easy_grid]";
				 } else if ( "three_thirds" === wp_grid_cells ) {
					 shortcode_name = 'third_grid';
					 wp_grid_shortcode = "[easy_grid class='' id='']["+shortcode_name+"] ... [/"+shortcode_name+"]["+shortcode_name+"] ... [/"+shortcode_name+"]["+shortcode_name+"] ... [/"+shortcode_name+"][/easy_grid]";
				 } else if ( "four_fourths" === wp_grid_cells ) {
					 shortcode_name = "fourth_grid";
					 wp_grid_shortcode = "[easy_grid class='' id='']["+shortcode_name+"] ... [/"+shortcode_name+"]["+shortcode_name+"] ... [/"+shortcode_name+"]["+shortcode_name+"] ... [/"+shortcode_name+"]["+shortcode_name+"] ... [/"+shortcode_name+"][/easy_grid]";
				 }
			 } else if ( "grid" === shortcode_type ) {
				 wp_grid_shortcode = "[easy_grid class='"+wp_grid_cells+"' id=''] ... cells here ... [/easy_grid]";
			 } else {
				 wp_grid_shortcode = "[cells_"+wp_grid_cells+"] ... [/cells_"+wp_grid_cells+"]";
			 }

			 wp_grid_add_to_editor(wp_grid_shortcode);
		 }

		 function wp_grid_add_to_editor(wp_grid_shortcode) {
			 wp.media.editor.insert( wp_grid_shortcode );
			 $(".wp_grid_select_box, .wp_grid_select_box_inner").hide();
		 }


		 // hide open windows on outside area click
		 $(document).click(function(event) {
			 if(!$(event.target).closest(".wp_grid_select_box").length && !$(event.target).closest("#wp-easy-grid-button").length) {
				 if($(".wp_grid_select_box").is(":visible")) {
					 $(".wp_grid_select_box").hide();
				 }
			 }
		 });
		 $(document).click(function(event) {
			 if(!$(event.target).closest(".wp_grid_select_columns").length && !$(event.target).closest(".wp_grid_show_columns").length) {
				 if($(".wp_grid_select_columns").is(":visible")) {
					 $(".wp_grid_select_columns").hide();
				 }
			 }
		 });
		 $(document).click(function(event) {
			 if(!$(event.target).closest(".wp_grid_select_cells").length && !$(event.target).closest(".wp_grid_show_cells").length) {
				 if($(".wp_grid_select_cells").is(":visible")) {
					 $(".wp_grid_select_cells").hide();
				 }
			 }
		 });
		 $(document).click(function(event) {
			 if(!$(event.target).closest(".wp_grid_select_grid").length && !$(event.target).closest(".wp_grid_show_grid").length) {
				 if($(".wp_grid_select_grid").is(":visible")) {
					 $(".wp_grid_select_grid").hide();
				 }
			 }
		 });

	 });


})( jQuery );
