import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("แทนรัก");
        groupMembers.add("วุฒิตุลย์");
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}