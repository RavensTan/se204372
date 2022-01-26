import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("แทนรัก 6120502688 หัวหน้ากลุ่ม");
        groupMembers.add("วุฒิตุลย์ 6120502769");
        groupMembers.add("สิทธิพัฒน์ 6120501771");
        groupMembers.add("ฐิชฌาภรณ์ 6120501673");
        groupMembers.add("วรัญญา 6120504001");
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}