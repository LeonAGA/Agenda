<?php include 'includes/layout/header.php';
include 'includes/functions/functions.php'
?>
<div class="containerBar">
    <h1>Agenda</h1>
</div>

<div class="bgBlue container shadow">
    <form id ="contact" action ="">
        <legend>Add a new contact <span>*All the fields are mandatory*</span></legend>
        
        <?php include 'includes/layout/form.php'; ?>
        
    </form>
</div>

<div class="bgYellow container shadow contacts" >
    <div class="contactsContainer">
        <h2>Contacts</h2>

        <input type="text" id ="search" class="seeker shadow" placeholder="Search">

        <p class="totalContacts"><span></span> Contacts</p>

        <div class="tableContainer">
            <table id="contactList" class="contactList">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $contacts = obtainContacts();
                        if($contacts->num_rows){ 
                            foreach($contacts as $contact){ ?>
                            <tr> 
                                <td><?php echo $contact['name']; ?></td>
                                <td><?php echo $contact['company'];?></td>
                                <td><?php echo $contact['phone'];?></td>
                                <td><a class="btn-edit btn" href="edit.php?id=<?php echo $contact['id'];?>"><i class="fas fa-edit"></i></a><button class="btn-delete btn"data-id="<?php echo $contact['id'];?>"type ="button"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            <?php }}?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/layout/footer.php'; ?>