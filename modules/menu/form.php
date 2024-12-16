<?php
mustlogin();
$obj=DB('menu');
if($uid){
    $info=$obj->find($uid);
    
}
if(isset($_POST['item'])){
    $info=[
        'item'=>$_POST['item'],
        'discription'=>$_POST['discription'],
        'category'=>$_POST['category']?implode(',',$_POST['category']):"",
        'availablity'=>$_POST['availablity']
    ];
    if($obj->save($info,$uid)){
        Session::set('gt',"Data ".($uid?"Updated ":"Saved ")."Successfully");
        redirect("menu");
    }
    else{
        echo "something went wrong";
    }
}
// $x=[
//     'item'=>'shahi paneer',
// 'discription'=>'kuch nhi'


// ];

?>
<div class="alert alert-primary h3 text-center">
    Item <?=$uid?"Edit":"Add"?> Form
</div>
<div class="container">
<form method="post">
    <div class="mb-3">
        <label for="item">Item Name</label>
        <input type="text" class="form-control" placeholder="Enter Item Name" required name="item"  id="item" value="<?=$info['item']??''?>">
    </div>
    <div class="mb-3">
        <label for="discription">Discription</label>
        <textarea class="form-control" rows=5 placeholder="Enter discription"  name="discription"  id="discription"><?=$info['discription']??''?></textarea>
    </div>

    <div class="mb-3">
        
        <label>Select Category</label>
        <?php $cats=explode(',',$info['category']??'');?>
        <select name="category[]" class="form-select" multiple>
            <option value="starter" <?=(in_array('starter',$cats))?'selected':'';?>>starter</option>
            <option value="maincourse" <?=(in_array('maincourse',$cats))?'selected':'';?>>maincourse</option>
            <option value="dessert" <?=(in_array('dessert',$cats))?'selected':'';?>>dessert</option>
            <option value="fastfood" <?=(in_array('fastfood',$cats))?'selected':'';?>>fastfood</option>
        </select>
    </div>


    <div class="mb-3">
        <label for="availablity">Status</label>
        <select name="availablity" class="form-select" >
            <option value="yes">Yes</option>
            <option value="no" <?=($info['availablity']??'')=='no'? 'selected':'';?>>No

            </option>
        </select>
    </div>
    

   
    
    <div class="mb-3 text-center">
        <button class="btn btn-success"> <?=$uid?"Update":"Save"?>
        </button>
    </div>
</form>
</div>