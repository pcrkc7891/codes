<LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:orientation="vertical" android:background="#ffffff">    
      
    <ImageView
            android:src="@drawable/user_thumb"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content" 
            android:layout_gravity="center"
            android:layout_marginTop="10px"
            android:layout_marginBottom="5dip"/>
     
     <TextView
         android:id="@+id/sendTo"
         android:layout_width="fill_parent"
         android:layout_height="wrap_content"
         android:text="Send To : "
         android:layout_marginLeft="10dip"
         android:layout_marginRight="10dip"
         android:textColor="#000000"/>
     
     <TextView android:layout_width="fill_parent"
         android:layout_height="wrap_content"
         android:text="Message:"
         android:layout_marginLeft="10dip"
         android:layout_marginRight="10dip"
         android:layout_marginTop="20dip"
         android:textColor="#000000"/>
      
     <EditText
         android:id="@+id/txtMessage"
         android:layout_width="fill_parent"
         android:textColor="#000000"
         android:layout_height="116dp"
         android:layout_margin="10dip"
         android:layout_marginBottom="20dip"
         android:height="100dp" />
     
      
     <Button android:id="@+id/btnSend"
         android:layout_width="fill_parent"
         android:layout_height="wrap_content"
         android:text="Send"
         android:layout_margin="10dip"/>
 
</LinearLayout>