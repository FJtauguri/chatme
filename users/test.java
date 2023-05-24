private void ProspecActionPerformed(java.awt.event.ActionEvent evt) {                                        
        // TODO add your handling code here:
        // Get the values from the input text fields
         String Sname = sname.getText();
        String Gname = gname.getText();
        String MI = minitial.getText();
        String ID = sid.getText();
        
        // Concatenate the full name
        String fullName = Sname + ", " + Gname;
        if (!MI.isEmpty()) {
        fullName += " " + MI.toUpperCase() + ".";
        }
        
        // Set the concatenated full name in the output text field
        fullname.setText(fullName);
        psid.setText(ID);
        
         String selectedItem = (String) ApDD.getSelectedItem();
          if (selectedItem.equals("AP")) {
              lblSpec.setText("with specialization in APPLICATION PROGRAMMING");
                    
                //3RD YEAR - 1ST SEM
                tbl3_1.setValueAt("ITElec1", 3, 0);//CODE 
                tbl3_1.setValueAt("Agile Programming", 4, 1);//SUB
                tbl3_1.setValueAt("Reading Visual Arts", 6, 1);
                
                 //3RD YEAR - 2ND SEM
                tbl3_2.setValueAt("ITElec2", 6, 0); //CODE 
                tbl3_2.setValueAt("ITElec3", 7, 0);
                tbl3_2.setValueAt("Open Source Programming", 6, 1); //SUB
                tbl3_2.setValueAt("Web System and Technologies", 7, 1);
                
                //4TH YEAR - 1ST SEM
                tbl4_1.setValueAt("ITElec4", 2, 0); //CODE 
                tbl4_1.setValueAt("ITElec5", 3, 0); 
                tbl4_1.setValueAt("Mobile and Wireless Computing", 2, 1); //SUB
                tbl4_1.setValueAt("Game Development", 3, 1);
               
                } else if (selectedItem.equals("DD")) {
                
                lblSpec.setText("with specialization in DIGITAL DESIGN");
                
                //3RD YEAR - 1ST SEM
                tbl3_1.setValueAt("ITElec1A", 3, 0);//CODE
                tbl3_1.setValueAt("Fundamentals of Video Production", 4, 1);//SUB
                tbl3_1.setValueAt("Understanding Visual Arts", 6, 1);
                
                //3RD YEAR - 2ND SEM
                tbl3_2.setValueAt("ITElec2A", 6, 0); //CODE 
                tbl3_2.setValueAt("ITElec3A", 7, 0);
                tbl3_2.setValueAt("Fundamentals of Digital Sound Production", 6, 1); //SUB
                tbl3_2.setValueAt("Video Preocessing", 7, 1);
                
                //4TH YEAR - 1ST SEM
                tbl4_1.setValueAt("ITElec4A", 2, 0); //CODE 
                tbl4_1.setValueAt("ITElec5A", 3, 0); 
                tbl4_1.setValueAt("Image Processing", 2, 1); //SUB
                tbl4_1.setValueAt("Organic Modeling", 3, 1);
                        
           try(Connection connection = DriverManager.getConnection("jdbc:mysql://localhost/registrationform","root", "")) {

    // Check if the data already exists in the database
    String querySelect = "SELECT * FROM fyfs_table1, bridging_table2, fyss_table3, syfs_table4, syss_table5, tyfs_table6, tyss_table7, summer_table8, ftyfs_table9, ftss_table10" +
        " WHERE fyfs_table1.id = ? AND bridging_table2.id = ? AND fyss_table3.id = ? AND syfs_table4.id = ? AND syss_table5.id = ?" +
        " AND tyfs_table6.id = ? AND tyss_table7.id = ? AND summer_table8.id = ? AND ftyfs_table9.id = ? AND ftss_table10.id = ?";
            
    PreparedStatement statementSelect = connection.prepareStatement(querySelect);
    statementSelect.setString(1, ID);
    statementSelect.setString(2, ID);
    statementSelect.setString(3, ID);
    statementSelect.setString(4, ID);
    statementSelect.setString(5, ID);
    statementSelect.setString(6, ID);
    statementSelect.setString(7, ID);
    statementSelect.setString(8, ID);
    statementSelect.setString(9, ID);
    statementSelect.setString(10, ID);
    ResultSet rs = statementSelect.executeQuery();
    
     // Retrieve the data from the result set and update the JTables
    while (rs.next()) {
        // Update the values in the JTables
          }
        
     // 1ST YEAR - 1ST SEM
TableModel model1 = tbl1_1.getModel();
model1.setValueAt(rs.getObject("CC100"), 0, 3);
model1.setValueAt(rs.getObject("CC101"), 1, 3);
model1.setValueAt(rs.getObject("IM101"), 2, 3);
model1.setValueAt(rs.getObject("GE5"), 3, 3);
model1.setValueAt(rs.getObject("GE1"), 4, 3);
model1.setValueAt(rs.getObject("GE4"), 5, 3);
model1.setValueAt(rs.getObject("PATHFIT1"), 6, 3);
model1.setValueAt(rs.getObject("NSTP100"), 7, 3);
// SET GWA
 gwa1.setText(rs.getString("GWA1_1"));
    
 // Bridging
TableModel model2 = bridging.getModel();
model2.setValueAt(rs.getObject("CBC1"), 0, 3);
model2.setValueAt(rs.getObject("CBC2"), 1, 3);
model2.setValueAt(rs.getObject("CBC3"), 2, 3);
gwa2.setText(rs.getString("GWAb"));
    
     // 1ST YEAR - 2ND SEM
TableModel model3 = tbl1_2.getModel();
model3.setValueAt(rs.getObject("CC102"), 0, 3);
model3.setValueAt(rs.getObject("ITSYS101"), 1, 3);
model3.setValueAt(rs.getObject("CC103"), 2, 3);
model3.setValueAt(rs.getObject("GE2"), 3, 3);
model3.setValueAt(rs.getObject("GE6"), 4, 3);
model3.setValueAt(rs.getObject("GE3"), 5, 3);
model3.setValueAt(rs.getObject("GE10"), 6, 3);
model3.setValueAt(rs.getObject("PATHFIT2"), 7, 3);
model3.setValueAt(rs.getObject("NSTP101"), 8, 3);
// SET GWA
    gwa3.setText(rs.getString("GWA1_2"));

    // 2ND YEAR - 1ST SEM
TableModel model4 = tbl2_1.getModel();
model4.setValueAt(rs.getObject("NET101"), 0, 3);
model4.setValueAt(rs.getObject("DP101"), 1, 3);
model4.setValueAt(rs.getObject("ITSYS102"), 2, 3);
model4.setValueAt(rs.getObject("CC104"), 3, 3);
model4.setValueAt(rs.getObject("GE8"), 4, 3);
model4.setValueAt(rs.getObject("GE7"), 5, 3);
model4.setValueAt(rs.getObject("GE9"), 6, 3);
model4.setValueAt(rs.getObject("PATHFIT3"), 7, 3);
// SET GWA
  gwa4.setText(rs.getString("GWA2_1"));
  
   // 2ND YEAR - 2ND SEM
TableModel model5 = tbl2_2.getModel();
model5.setValueAt(rs.getObject("CC105"), 0, 3);
model5.setValueAt(rs.getObject("MS101"), 1, 3);
model5.setValueAt(rs.getObject("NET102"), 2, 3);
model5.setValueAt(rs.getObject("VD100"), 3, 3);
model5.setValueAt(rs.getObject("HCI101"), 4, 3);
model5.setValueAt(rs.getObject("GE11"), 5, 3);
model5.setValueAt(rs.getObject("GE14"), 6, 3);
model5.setValueAt(rs.getObject("PATHFIT4"), 7, 3);
// SET GWA
    gwa5.setText(rs.getString("GWA2_2"));
    
    // 3RD YEAR - 1ST SEM
TableModel model6 = tbl3_1.getModel();
model6.setValueAt(rs.getObject("IAS101"), 0, 3);
model6.setValueAt(rs.getObject("MS102"), 1, 3);
model6.setValueAt(rs.getObject("ITTRENDS100"), 2, 3);
model6.setValueAt(rs.getObject("SA101"), 3, 3);
model6.setValueAt(rs.getObject("ITELEC1"), 4, 3);
model6.setValueAt(rs.getObject("MST100"), 5, 3);
model6.setValueAt(rs.getObject("VD101"), 6, 3);
// SET GWA
  gwa6.setText(rs.getString("GWA3_1"));
  
   // 3RD YEAR - 2ND SEM
TableModel model7 = tbl3_2.getModel();
model7.setValueAt(rs.getObject("IPT101"), 0, 3);
model7.setValueAt(rs.getObject("PT101"), 1, 3);
model7.setValueAt(rs.getObject("PROG3"), 2, 3);
model7.setValueAt(rs.getObject("TECH101"), 3, 3);
model7.setValueAt(rs.getObject("ITBUSI101"), 4, 3);
model7.setValueAt(rs.getObject("GE17"), 5, 3);
model7.setValueAt(rs.getObject("ITELEC2"), 6, 3);
model7.setValueAt(rs.getObject("ITELEC3"), 7, 3);
// SET GWA
gwa7.setText(rs.getString("GWA3_2"));

// Summer
TableModel model8 = tblSummer.getModel();
model8.setValueAt(rs.getObject("MS103"), 0, 3);
model8.setValueAt(rs.getObject("CAP101"), 1, 3);
// SET GWA
gwa8.setText(rs.getString("GWAs"));

// 4TH YEAR - 1ST SEM
TableModel model9 = tbl4_1.getModel();
model9.setValueAt(rs.getObject("CAP102"), 0, 3);
model9.setValueAt(rs.getObject("SP101"), 1, 3);
model9.setValueAt(rs.getObject("ITELEC4"), 2, 3);
model9.setValueAt(rs.getObject("ITELEC5"), 3, 3);
model9.setValueAt(rs.getObject("IAS102"), 4, 3);
model9.setValueAt(rs.getObject("ITENGL100"), 5, 3);
// SET GWA
  gwa9.setText(rs.getString("GWA4_1"));
  
  
  // 4TH YEAR - 2ND SEM
TableModel model10 = tbl4_2.getModel();
model10.setValueAt(rs.getObject("PRAC101"), 0, 3);
// SET GWA
      gwa10.setText(rs.getString("GWA4_2"));
    

} catch (SQLException ex) {
    ex.printStackTrace();
}

  
  
                }
    }