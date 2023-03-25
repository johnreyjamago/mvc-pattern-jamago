public class StudentController {
    private Student model;
    private StudentView view;
    public StudentController(Student model, StudentView view){
        this.model = model;
        this.view = view;
    }

    public void setStudentName(String name){
        model.setName(name);
    }
    public String getStudentName(){
        return model.getName();
    }



    public void setStudentSection(String section){
        model.setSection(section);
    }
    public String getStudentSection(){
        return model.getSection();
    }


    public void updateView(){
        view.printStudentDetails(model.getName(), model.getSection());
    }
}
