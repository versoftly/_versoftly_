/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package versoft.mostlyphpsoftware.versoftly;

import java.util.Scanner;

/**
 *
 * @author versoftly
 */
public class ReadData {
    
    public static void main (String[] args) {
        
        Scanner read = new Scanner(System.in);
        
        System.out.print("What is your Name: ");
        
        String name = read.nextLine();
        
        System.out.println("Hello " + name);
        
    }
    
}
