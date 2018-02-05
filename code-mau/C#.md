Thoát app
	System.Windows.Forms.Application.Exit();


private void setComboBox(ref ComboBox cb, DataTable dt, String DisplayMember, String ValueMember)
{
    cb.DataSource = dt;
    cb.DisplayMember = DisplayMember;
    cb.ValueMember = ValueMember;
    cb.SelectedIndex = -1;e
}