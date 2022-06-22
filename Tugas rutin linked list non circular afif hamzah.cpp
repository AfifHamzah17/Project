#include <iostream>
#include <conio.h>
#include<stdlib.h>
#include <iomanip> 
using namespace std;

struct Data_node
{
       char nama[25];
       char kelas[7];
       char nim[10];
};

struct node
{
      Data_node data;
      node* next;
};


node* _head;
node* _tail;
node* _curr;
node* _entry;
node* _del;

void inisialisasi()
{
      _head = NULL;
      _tail = NULL;
}


void input(Data_node dt)
{
      
      _entry = (node* )malloc(sizeof(node)); 
      _entry->data = dt; 
      _entry->next = NULL;
      if(_head==NULL)
      {
            _head = _entry;
            _tail = _head;
      }
      else
      {
            _tail->next = _entry;
            _tail = _entry;
      }
}

void hapus()
{
      node _simpan;
      if(_head==NULL)
      {
            cout<<"\nLinked list kosong, penghapusan tidak bisa dilakukan."<<endl;
      }
      else
      {
            _simpan.data  = _head ->data;
           cout<<"\nData yang dihapus adalah ";
cout<<_simpan.data.nama<<"/"<<_simpan.data.kelas<<"/"<<_simpan.data.nim<<endl;


            _del = _head;
            _head = _head->next;
            delete _del;
      }
}

void cetak()
{
      _curr = _head;
      if(_head == NULL)
            cout<<"\ntidak ada data dalam linked list"<<endl;
      else
      {
            cout<<"\nData yang ada dalam linked list : \n"<<endl;
            cout<<"\t";
            while(_curr!=NULL)
            {
                cout<<_curr->data.nama<<"/"<<_curr->data.kelas<<"/"<<_curr->data.nim;
                cout<<" -> ";
                _curr = _curr->next;
            }
            cout<<"NULL";
            cout<<endl;
      }
}

void menu()
{
      char pilih, ulang;
      node tmp; 

      do
      {
      fflush(stdin);
      system("cls");
    	printf("\t\t\t\t\t Tugas Rutin Singly linked list non circular \n");
		printf("Nama : Afif Hamzah\n");
		printf("Pertemuan : 11\n");
		printf("Tanggal : 28 April 2022\n");
        cout<<" ============================"<<endl;
        cout<<" =   PROGRAM LINKED LIST    ="<<endl;
        cout<<" ============================"<<endl;
        cout<<" = 1. Insert Depan          ="<<endl;
        cout<<" = 2. Delete Depan          ="<<endl;
        cout<<" = 3. Tampil Data           ="<<endl;
        cout<<" = 4. Clear                 ="<<endl;
        cout<<" = 5. Exit                  ="<<endl;
        cout<<" ============================"<<endl;
        cout<<" Masukan Pilihan : ";cin>>pilih;

      switch(pilih)
      {
      case '1' :
            fflush(stdin);
            cout<<"\nMasukkan nama  : ";
            cin>>tmp.data.nama;
            cout<<"Masukkan kelas : ";
            cin>>tmp.data.kelas;
            cout<<"Masukkan NIM   : ";
            cin>>tmp.data.nim;

            input(tmp.data);
            break;
      case '2' :
            hapus();
            break;
      case '3' :
            cetak();
            break;
      case '4' :
            exit(0);
            break;
      default :
            cout<<"\nPilihan salah"<<endl;
      }
      cout<<"\nKembali ke menu?(y/n)";
      cin>>ulang;
   }while(ulang=='y' || ulang=='Y');
}

int main()
{

      inisialisasi();
      menu();

      return EXIT_SUCCESS;
}
