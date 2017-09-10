package game;

import java.awt.Graphics;
//import java.awt.List;
import java.awt.Rectangle;
import java.util.*;

 
public class enemymanager {
	
	private dodo instance;
	private int amt;
	private List<enemy> enemies= new ArrayList<enemy>();
	 
	
	public enemymanager(dodo instance,int a)
	{
		this.amt=a;
		this.instance=instance;
		spawn();
	}
		 
	public void spawn()
	{
		int ss=enemies.size();
		Random random=new Random();
		if(ss<amt)
		{
			for(int i=0;i<amt-ss;i++)
			{
				enemies.add(new enemy( instance , random.nextInt(778),random.nextInt(100) ));
			}
		}
		else
		{
		for(int i=0;i<ss-amt;i++)
			enemies.remove(i);
		}
		
	}
	public void draw(Graphics g)
	{
		update();
		for(enemy e : enemies) e.draw(g);
	}
	
	public void update()
	{
		boolean rm=false;
		for(int i=0;i<enemies.size();i++)
		{
			if(enemies.get(i).isdead())
			{
				rm=true;
				enemies.remove(i);
			}
		}
		
		if(rm)
		spawn();	
	}
	
	public boolean iscolliding(Rectangle e)
	{
		boolean c=false;
		for(int i=0;i<enemies.size();i++)
		{
			if(e.intersects(enemies.get(i).getbox())) c=true;
		}
		
		return c;
	
	}

}
