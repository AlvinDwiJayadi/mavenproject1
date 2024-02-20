/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package com.mycompany.mavenproject1;

import java.util.Scanner;

/**
 *
 * @author alvin
 */
public class NewMain {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // nama elvina polinema fjfujyf
        // TODO code application logic here
        Scanner s=new Scanner(System.in);
        System.out.print("Masukkan Panjang : ");
        int panjang=s.nextInt();
        System.out.print("Masukkan Lebar : ");
        int lebar=s.nextInt();
        int luas=panjang*lebar;
        System.err.println("Luas persegi panjang adalah : "+luas);
    }
    
}
