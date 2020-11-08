var base_url = $('#base_url').val();
$(document).ready(function(){

	
	$('#search_result_list').html('<img src="'+base_url+'/images/loaderimg.gif">');
  $.ajax({
        type : "POST",
        url : base_url + "rickandmorty/search_result/",
        success : function(data) {
           $('#search_result_list').html(data);
        }
    });
})

function paginationfun(nextprevlink='')
{
	$('#search_result_list').html('<img src="'+base_url+'/images/loaderimg.gif">');
	$.ajax({
      type : "POST",
	  url : base_url + "rickandmorty/search_result/",
      data : {
        pagelink : nextprevlink,
      },
      success : function(data) {
		$('#search_result_list').html(data);
      }
    });

}

function searchresult()
{
	$('#search_result_list').html('<img src="'+base_url+'/images/loaderimg.gif">');
	var character_name=$("#search_val_name").val();
	var character_species=$("#search_val_species").val();
	var character_gender=$("#search_gender").val();
	$.ajax({
      type : "POST",
	  url : base_url + "rickandmorty/search_result/",
      data : {
        character_name : character_name,
		character_species : character_species,
		character_gender : character_gender,
      },
      success : function(data) {
		$('#search_result_list').html(data);
      }
    });

}
function resetsearch()
{

	document.getElementById("search_form").reset();
    searchresult();
}
function appeared_episode(chara_id,char_name)
{
	$('#ch_episode_list').html('');
	$.ajax({
      type : "POST",
	  url : base_url + "rickandmorty/get_episode_list/",
      data : {
        chara_id : chara_id,
      },
      success : function(data) {

		$('#ch_episode_list_data').html(data);
		$('#episodemodal').modal();
		$("#char_name").html(char_name +" Appear Episodes");

		$("#ch_episode_list_data").animate({ 
            scrollTop: 0 
        }, "slow");
		
      }
    });

}