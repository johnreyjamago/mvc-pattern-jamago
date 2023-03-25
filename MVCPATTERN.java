public class MVCPATTERN {
    public static void main(String[] args) {
        //student fetching
        Student model  = retrieve();

        //view creation
        StudentView view = new StudentView();
        StudentController controller = new StudentController(model, view);
        controller.updateView();

        //model update
        controller.setStudentName("Justin");
        System.out.println("----Updated");
        controller.updateView();
    }
    private static Student retrieve(){
        Student student = new Student();
        student.setName("John-Rey Jamago");
        student.setSection("IT3R4");
        return student;
    }
}
