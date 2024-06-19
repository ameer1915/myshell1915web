GIF89a;
<TABLE BORDER="1" CELLSPACING="0">
<TR>
    <TD>Disabled</TD>
</TR>
<%

Dim sUserInfo

On Error Resume Next

Set oContainer = GetObject("WinNT://127.0.0.1")


For Each oIADs In oContainer

    If (oIADs.Class = "User") Then
        Set oUser = oIADs
    
    Disabled = ""

        Disabled = oUser.HomeDirectory 
%>

<TR>
    <TD><%=Disabled%> </TD>
<%    End If%>    
<%Next%>
</TABLE>

