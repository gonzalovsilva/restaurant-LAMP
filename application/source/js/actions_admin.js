function toggleMsg(get_id){
    let row_id = get_id;
    let btn_toggle = document.getElementById(`btn_${row_id}`);
    let row_date = document.getElementById(`date_${row_id}`);
    let row_name = document.getElementById(`name_${row_id}`);
    let row_lastname = document.getElementById(`lastn_${row_id}`);
    let row_mail = document.getElementById(`mail_${row_id}`);
    let row_msg = document.getElementById(`msg_${row_id}`);

    if(btn_toggle.classList.contains('btn-active')){
        btn_toggle.classList.remove('btn-active');

        row_name.classList.add('col-2');
        row_name.classList.remove('col-8');
    
        row_lastname.classList.add('no-display');
        row_mail.classList.add('no-display');
    
        row_msg.classList.add('col-6');
        row_msg.classList.remove('order-2');
        row_msg.classList.remove('mt-2');
        row_msg.classList.add('ellipsis');
        row_msg.classList.remove('col-12');

    }else{
        btn_toggle.classList.add('btn-active');

        row_name.classList.remove('col-2');
        row_name.classList.add('col-8');
    
        row_lastname.classList.remove('no-display');
        row_mail.classList.remove('no-display');
    
        row_msg.classList.remove('col-6');
        row_msg.classList.add('order-2');
        row_msg.classList.add('mt-2');
        row_msg.classList.remove('ellipsis');
        row_msg.classList.add('col-12');
    }
}
