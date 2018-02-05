private void createCell(ref Excel.Worksheet exSheet, int hang,int cot, int size,bool bold,Color color,String value)
        {
            Excel.Range x = (Excel.Range)exSheet.Cells[hang, cot];
            x.Font.Size = size;
            x.Font.Bold = bold;
            x.Font.Color = color;
            x.Value = value;
        }

        private void btnInHD_Click(object sender, EventArgs e)
        {
            if(dtChiTietHD.Rows.Count > 0)
            {
                //mo Excel
                Excel.Application exApp = new Excel.Application();
                Excel.Workbook exBook = exApp.Workbooks.Add(Excel.XlWBATemplate.xlWBATWorksheet);
                Excel.Worksheet exSheet = (Excel.Worksheet)exBook.Worksheets[1];
                Excel.Range cell;
                createCell(ref exSheet, 1, 1, 12, false, Color.Black, "Hóa Đơn Bán Hàng");
                createCell(ref exSheet, 2, 1, 12, false, Color.Black, "Mã Hóa Đơn: " + txtMaHD.Text);
                createCell(ref exSheet, 3, 1, 12, false, Color.Black, "Tên Khách Hàng: "+ txtTenKH.Text);
                createCell(ref exSheet, 4, 1, 12, false, Color.Black, "Số Điện Thoại: " + txtSoDT.Text);
                createCell(ref exSheet, 5, 1, 12, false, Color.Black, "STT");
                createCell(ref exSheet, 5, 2, 12, false, Color.Black, "Mã hàng");
                createCell(ref exSheet, 5, 3, 12, false, Color.Black, "Tên hàng");
                createCell(ref exSheet, 5, 4, 12, false, Color.Black, "Số lượng");
                createCell(ref exSheet, 5, 5, 12, false, Color.Black, "Đơn giá");
                createCell(ref exSheet, 5, 6, 12, false, Color.Black, "Giảm giá");
                createCell(ref exSheet, 5, 7, 12, false, Color.Black, "Thành tiền");

                int STT = 0;
                int donghientai = 5;
                foreach (DataGridViewRow row in dtChiTietHD.Rows)
                {
                    donghientai++;
                    STT++;
                    createCell(ref exSheet, donghientai, 1, 12, false, Color.Black, STT.ToString());
                    for(int i = 0; i<row.Cells.Count; i++)
                    {
                        //createCell(ref exSheet, donghientai, 2 + i, 12, false, Color.Black, row.Cells[i].Value.ToString());

                        cell = (Excel.Range)exSheet.Cells[donghientai, i + 2];
                        cell.Value = row.Cells[i].Value;
                    }
                }
                
                SaveFileDialog dlgSave= new SaveFileDialog();
                exSheet.Name = "Hang";
                exBook.Activate(); //Kích hoạt file Excel
                //Thiết lập các thuộc tính của SaveFileDialog
                dlgSave.Filter = @"Excel Document(*.xls)|*.xls |Word Document(*.doc)
                                             | *.doc | All files(*.*) | *.* ";
                dlgSave.FilterIndex = 1;
                dlgSave.AddExtension = true;
                dlgSave.DefaultExt = ".xls";
                if (dlgSave.ShowDialog() == System.Windows.Forms.DialogResult.OK)
                    exBook.SaveAs(dlgSave.FileName.ToString());//Lưu file Excel
                exApp.Quit();
            }
        }