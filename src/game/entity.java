package game;

import java.awt.Graphics;

public abstract class entity {

	protected int x,y,w,h;
	protected boolean removed= false;
	
	public entity(int x,int y)
	{
		this.x=x;
		this.y=y;
	}
	 
	public void draw(Graphics g)
	{
		
	}
	
	public int getX()
		{
			return x;
	  }
		public int getY(){
			return y;
		}
		public int	getW()
		{
			return w;
		}
		public int	getH(){
			return h;
		}
	
	
}
