/* global increment variables */
var i = 1; //keeps track of ids
var total_cards = 1; //keeps track of actual cards

/* ADD_CARD
    This function adds new fields for a new card when Add Card is clicked.
 */
function add_card(){
    var card_name = 'card'+i;

    //clone the form from first card in cards
    var first_id = $('#cards div:first-child').attr('id');
    console.log(first_id);
    var next_Card =$('#'+ first_id).clone();

    //update ids
    increment_ids(next_Card, i);

    //append clone on the end
    $("#cards").append(next_Card);

    i++;
    total_cards++;

    //show remove card buttons
    if(total_cards > 1 ) { //if we have more than 1 card, give option to delete any card
        let j = 0;
        for (j = 0; j < i; j++) {  //iterate over i because that's how many possible cards we had at one point
            if ($('#card' + j).length) {  //check if the card exists
                $('#delete' + j).attr("hidden", false);
            }
        }
    }
    else
    {
        alert("You must have at least 1 card.");
    }

}
function remove_card(id){
    //get the number of the element from the id
    var extract = id.match(/(\d+)/);
    var item_num = extract[0];

    //delete the card
    $('#card' + item_num).remove();

    //decrement items
    total_cards--;

    //if we only have 1 card left, hide the x
    if(total_cards === 1 ) { //if we have more than 1 card, give option to delete any card
        let j = 0;
        for (j = 0; j < i; j++) {  //iterate over i because that's how many possible cards we had at one point
            if ($('#card' + j).length) {  //check if the card exists
                $('#delete' + j).attr("hidden", true);
            }
        }
    }

    /*
    if(total_cards > 1){
        $(this).delete()
    }
     */
}
/* INCREMENT_IDS
    This function updates the ids for each field in the added card form for form processing
 */
function increment_ids(elem, num) {
    //for each id in element, remove the number and then append the number given
    $(elem).find("[id]").add(elem).each(function() {
        this.id = this.id.replace(/\d+$/, "") + num;
    })
}