#include<bits/stdc++.h>
using namespace std;
string convertlower(string str)
{
	int i,len =str.length();
	for(i=0;i<len;i++)
	{
		if(isupper(str[i]))
		str[i] =str[i]+32;
	}
	return str;
}
string convertstring(int num)
{
	string str="";
	
	while(num!=0)
	{
		int rem = num%10;
		str = str + (char)(rem+'0'); 
		num= num/10;
	}
	reverse(str.begin(),str.end());
	return str;
}
struct node{
	int sno;
	string source;
	string destination;
	int distance;
};
struct comp{
	string companyname;
	string compno;
	float rupperkm;
	float timeperkm;
};
int main()
{
	struct node str[10000];
	string sou,dest;
	int i=0,sno,dist;
	//FILE *fp;
	freopen("source.txt","r",stdin);

	while(1)
	{
		
		//fscanf(fp,"%d",&sno);
		cin>>sno;
		if(sno==-1)
		{
			break;
		}
		cin>>sou>>dest>>dist;
		str[i].sno = sno;
		str[i].source=sou;
		str[i].destination = dest;
		str[i].distance = dist;
		i++;
	}

	int n=i,m;
	int j=0;
	string comp,compname;
	float rup;
	float time;
	struct comp company[10000];
	
	freopen("company.txt","r",stdin);
	
	while(1)
	{
		cin>>compname;
		if(compname=="NO")
		{
			break;
		}
		cin>>comp;
		cin>>rup;
		cin>>time;
		company[j].companyname = compname;
		company[j].compno=comp;
		company[j].rupperkm = rup;
		company[j].timeperkm = time;
		j++;
	}
	//fclose(stdin);
	m = j;
	freopen("query.txt","r",stdin);
	while(1)
	{
	string str1,str2;
	cin>>str1;
	if(str1=="NO")
	{
		break;
	}
	cin>>str2;
	int p,qdistance;
	str1 = convertlower(str1);
	str2 = convertlower(str2);
	for(i=0;i<n;i++)
	{
		if(str[i].source==str1 && str[i].destination == str2)
		{
			p = str[i].sno;
			qdistance = str[i].distance;
			break;
		}
	}
//	cout<<p<<" "<<q<<"\n";
	//cout<<"flightid"<<"\t"<<"source"<<"\t"<<"destination"<<"\t"<<"distance"<<"\t"<<"time"<<"\t"<<"price"<<"\n";
	for(i=0;i<m;i++)
	{
		string id = company[i].compno + '-' + convertstring(p);
		float valtime = (float)((q/company[i].timeperkm)/60);
		float price = (float)q * company[i].rupperkm;
		cout<<company[i].companyname<<"\t"<<id<<"\t"<<str1<<"\t"<<str2<<"\t"<<qdistance<<"\t"<<valtime<<"\t"<<price<<"\t"<<"\n";
	}
	cout<<"\n"<<"\n";
}
}
