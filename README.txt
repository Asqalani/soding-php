This is a simple task system whereby it can create, edit, delete as well as list all tasks. 

The system starts at "index.html" which is the main menu. In "index.html", there are two options which is either to create task or to list all tasks.

In order to start, user need to select create task. Once user has selected create task, system will ask to enter the details which is the task name as well as task description. There is a simple validation to ensure that the details user entered is the correct detail. If the user confirms, then it will automatically store into the database which is based using phpMyAdmin. Once it stores, it will redirect to the main menu.

Once it is redirected back to the main menu, user can choose to create another task or list all tasks.

If user wish to list all tasks, user can just click the button. However, the system limitation is that there is no if else statement in the system to show any error if there are no details entered yet.

If there are already tasks that has been entered previously, in the list all task page, will show option to edit/delete the task. This however, can only be done one task at a time. There will be "edit/delete" button for user to either edit or delete the task. If user clicks on it, it will redirect to another page which shows the details that the user wish to edit/delete. If user wishes to delete the details, user will need to select yes at the radio button and click save. There will be some validation as well to ensure that the details are not accidentally deleted.



Working system can be viewed at the following website :
https://asqalani.000webhostapp.com/